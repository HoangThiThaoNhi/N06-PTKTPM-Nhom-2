<?php
// Bật báo cáo lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once '../dbconnect.php';

// Xử lý khi form được submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $subcategory_name = mysqli_real_escape_string($conn, $_POST['subcategory_name']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

    // Câu lệnh SQL để thêm mới danh mục con
    $sql = "INSERT INTO subcategories (subcategory_name, category_id) VALUES ('$subcategory_name', '$category_id')";

    // Thực hiện câu lệnh SQL và kiểm tra kết quả
    if (mysqli_query($conn, $sql)) {
        // Lưu thông báo vào session
        $_SESSION['success_message'] = 'Danh mục con đã được thêm thành công!';
        header("Location: index.php?success=true");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Cập nhật Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Cập nhật FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Thêm mới Danh mục con</title>
    <style>
        .create-subcate .container {
            margin-top: 80px;
            min-height: 550px;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/modal.css">
</head>

<body>

    <?php include_once '../header.php'; ?>
    <section class="create-subcate">
        <div class="container">
            <div class="row">
                <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-4">
                    <a href="index.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i></a>
                    <h2 class="my-4">Thêm mới Danh mục con</h2>

                    <!-- Form thêm mới danh mục con -->
                    <form action="create.php" method="post">
                        <!-- Trường nhập tên danh mục con -->
                        <div class="mb-3">
                            <label for="subcategory_name" class="form-label">Tên danh mục con:</label>
                            <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" required>
                        </div>

                        <!-- Dropdown chọn danh mục cha -->
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Danh mục cha:</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="" selected disabled>Chọn danh mục cha</option>
                                <?php
                                // Truy vấn lấy danh sách các danh mục cha
                                $category_query = "SELECT category_id, category_name FROM categories";
                                $category_result = mysqli_query($conn, $category_query);

                                // Hiển thị danh sách danh mục cha trong dropdown
                                while ($row = mysqli_fetch_assoc($category_result)) {
                                    echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                }

                                // Giải phóng bộ nhớ
                                mysqli_free_result($category_result);
                                ?>
                            </select>
                        </div>

                        <!-- Nút thêm mới -->
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>

                </main>
            </div>
        </div>
    </section>


    <?php include_once '../footer.php'; ?>


</body>

</html>