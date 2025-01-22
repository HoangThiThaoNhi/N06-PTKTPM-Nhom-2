<?php
session_start();

require_once 'vendor/autoload.php';

// Load biến môi trường từ file .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Thiết lập Google Client
$client = new Google\Client();
$client->setClientId(getenv('GOOGLE_CLIENT_ID'));
$client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
$client->setRedirectUri(getenv('GOOGLE_REDIRECT_URI'));
$client->addScope("email");
$client->addScope("profile");
$client->setPrompt("select_account");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token["error"])) {
        $client->setAccessToken($token['access_token']);

        // Lấy thông tin người dùng từ Google
        $google_oauth = new Google\Service\Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // Lấy email và tên người dùng từ Google
        $email = $google_account_info->email;
        $name = $google_account_info->name;

        // Đặt quyền mặc định là người dùng thông thường
        $default_role = 0;

        require_once 'dbconnect.php';

        // Kiểm tra kết nối cơ sở dữ liệu
        if ($conn->connect_error) {
            die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        // Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu chưa
        $stmt = $conn->prepare("SELECT user_id, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Người dùng đã tồn tại
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role'] = $user['role'];
        } else {
            // Nếu người dùng chưa tồn tại, tạo tài khoản mới với mật khẩu ngẫu nhiên
            $random_password = bin2hex(random_bytes(8));
            $hashed_password = password_hash($random_password, PASSWORD_DEFAULT);

            $phone_number = NULL;

            // Chèn dữ liệu vào bảng users
            $stmt = $conn->prepare("INSERT INTO users (email, full_name, password, role, phone_number) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $email, $name, $hashed_password, $default_role, $phone_number);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['role'] = $default_role;
            } else {
                echo "Lỗi khi chèn dữ liệu: " . $stmt->error;
                die();
            }
        }

        $stmt->close();
        $conn->close();

        // Chuyển hướng về trang chủ sau khi đăng nhập thành công
        header("Location: ./index.php");
        exit();
    } else {
        echo "Lỗi khi đăng nhập bằng Google!";
    }
} else {
    header("Location: " . $client->createAuthUrl());
    exit();
}
?>
