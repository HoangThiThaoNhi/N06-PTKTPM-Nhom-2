<?php
session_start();

require_once 'vendor/autoload.php';

// Thiết lập Google Client
$client = new Google\Client();
$client->setClientId('327317089169-c9n8jbg6e6kedvn1ggbpjkn5o5lcg7vd.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost:8081/DOAN/google_login.php');
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

        // Đặt default_role sau khi lấy thông tin
        $default_role = 0; // Đặt quyền mặc định là người dùng thông thường

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
            // Nếu người dùng chưa tồn tại, tạo tài khoản mới và mật khẩu ngẫu nhiên
            $random_password = bin2hex(random_bytes(8)); // Mật khẩu ngẫu nhiên 16 ký tự
            $hashed_password = password_hash($random_password, PASSWORD_DEFAULT); // Mã hóa mật khẩu

            $phone_number = NULL; // Hoặc có thể là một giá trị mặc định nào đó

            // Chèn dữ liệu vào bảng users
            $stmt = $conn->prepare("INSERT INTO users (email, full_name, password, role, phone_number) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $email, $name, $hashed_password, $default_role, $phone_number);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['role'] = $default_role;

                // Mật khẩu ngẫu nhiên đã được tạo và lưu trữ, nhưng không cần gửi cho người dùng
            } else {
                echo "Lỗi khi chèn dữ liệu: " . $stmt->error;
                die();
            }
        }

        $stmt->close();
        $conn->close();

        // Chuyển hướng về trang chủ sau khi đã lưu thông tin người dùng
        header("Location: ./index.php"); // Chuyển hướng về trang chủ sau khi đăng nhập thành công
        exit();
    } else {
        echo "Lỗi khi đăng nhập bằng Google!";
    }
} else {
    header("Location: " . $client->createAuthUrl());
    exit();
}
