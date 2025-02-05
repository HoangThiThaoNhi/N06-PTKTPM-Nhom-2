<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/modal.css">
</head>

<body>
    <?php 
    include_once 'loading_bar.php';
    ?>
    <section class="admin-header">
        <div class="header">
            <button class="sidebar-toggle btn btn-dark" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <a href="/DOAN/index.php">
                <img src="https://upload.wikimedia.org/wikipedia/vi/3/32/Logo_Ph%C3%BAc_Long.svg" alt="Logo">
            </a>
            <h2>Trang quản trị ADMIN</h2>
        </div>
        <!-- Sidebar -->
        <nav class="sidebar">
            <span class="close-btn">&times;</span>
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/index.php">
                            <i class="fa-solid fa-gauge-high"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/sanpham/index.php">
                            <i class="fas fa-box"></i> <span>Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/thuonghieu/index.php">
                            <i class="fas fa-trademark"></i> <span>Thương Hiệu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/danhmuc/index.php">
                            <i class="fa-solid fa-list"></i> <span>Danh Mục SP</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/danhmucnho/index.php">
                            <i class="fab fa-steam-symbol"></i> <span>Danh Mục Nhỏ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/banner/index.php">
                            <i class="fa-solid fa-panorama"></i> <span>Banner</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/subbanner/index.php">
                            <i class="fas fa-image"></i> <span>Banner Nhỏ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/tintuc/index.php">
                            <i class="fa-regular fa-newspaper"></i> <span>Tin Tức</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/notifications/index.php">
                            <i class="fa-regular fa-bell"></i> <span>Thông Báo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/voucher/index.php">
                            <i class="fa-solid fa-ticket"></i> <span>Vouchers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/order-details/index.php">
                            <i class="fa-regular fa-note-sticky"></i> <span>Đơn hàng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/DOAN/admin/user/index.php">
                            <i class="fas fa-users"></i> <span>User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-- Main content -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to toggle sidebar visibility
        document.querySelector('.sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });

        document.querySelector('.sidebar .close-btn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.remove('show');
        });

        document.addEventListener('click', function(event) {
            var sidebar = document.querySelector('.sidebar');
            var sidebarToggle = document.querySelector('.sidebar-toggle');
            if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>

</html>