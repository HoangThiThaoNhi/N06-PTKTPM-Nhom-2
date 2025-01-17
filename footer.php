<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=2.8">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'dbconnect.php';
    include_once 'track_online.php';

    ?>

    <section class="myfooter">
        <div class="container">
            <div class="row footer-head py-2 px-5">
                <div class="col-6 d-flex justify-content-center align-items-center text-warning">
                    <div class="text-center">
                        <h4>Phúc Long</h4>
                        <h5>Trao đi sự ngọt ngào!</h5>
                    </div>
                </div>

                <div class="col-3 text-warning">
                    <?php
                    // Truy vấn tổng số lượng bán từ cột sales_count
                    $sql = "SELECT SUM(sales_count) as total_sales FROM products";
                    $result = $conn->query($sql);

                    $total_sales = 0;

                    if ($result->num_rows > 0) {
                        // Lấy kết quả
                        $row = $result->fetch_assoc();
                        $total_sales = $row['total_sales'];
                    }
                    ?>
                    <h5>
                        <i class="fa-solid fa-chart-line"></i>
                        <?php echo $total_sales; ?>
                        <p class="m-0">Sản phẩm đã bán</p>
                    </h5>

                </div>
                <div class="col-3 text-warning">
                    <?php
                    // Truy vấn tổng số lượng bán từ cột sales_count
                    $sql = "SELECT SUM(sales_count) as total_sales FROM products";
                    $result = $conn->query($sql);

                    $total_sales = 0;

                    if ($result->num_rows > 0) {
                        // Lấy kết quả
                        $row = $result->fetch_assoc();
                        $total_sales = $row['total_sales'];
                    }

                    ?>
                    <h5>
                        <div class="alert ">
                        <i class="fa-solid fa-users-line"></i>Online: <span id="onlineUsers">0</span> 
                        </div>

                    </h5>

                </div>
            </div>

            <div class="row footer-body py-3 px-5 text-white">
                <div class="col-sm-6 col-md-4">
                    <h4><img src="https://upload.wikimedia.org/wikipedia/vi/thumb/3/32/Logo_Ph%C3%BAc_Long.svg/1280px-Logo_Ph%C3%BAc_Long.svg.png" alt="Logo Zatan Shop"></h4>
                    <ul class="list-footer">
                        <li class="li-footer">Địa chỉ : Hà Đông, Hà Nội</li>
                        <li class="li-footer">Số điện thoại: 1800 6779</li>
                        <li class="li-footer">Email:info2@phuclong.masangroup.com</li>
                    </ul>

                </div>
                <div class="col-sm-6 col-md-4">

                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>Tổng đài hỗ trợ</h4>
                    <ul class="list-footer">
                        <li class="li-footer">Gọi mua hàng: 1800 6779 </li>
                        <li class="li-footer">Gọi bảo hành: 1900 2345 18 (Bấm phím 0: Lễ Tân | phím 1: CSKH) </li>
                        <li class="li-footer">Gọi khiếu nại: 1900 2345 18 (Bấm phím 0: Lễ Tân | phím 1: CSKH) </li>
                    </ul>
                    <h4>Phương thức thanh toán</h4>
                    <h5><img src="admin/assets/img/vnpay.png" alt="VnPay"></h5>
                </div>
            </div>
            <div class="row footer-footer py-3 px-5">
                <div class="col text-white">
                    Công ty Cổ Phần Phúc Long Heritage <br>
                    © Công ty CP Phúc Long Heritage 2025

                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function updateOnlineUsers() {
            $.get("get_online_users.php", function(data) {
                $("#onlineUsers").text(data); // Cập nhật số người online
            });
        }

        // Cập nhật mỗi 10 giây
        setInterval(updateOnlineUsers, 10000);
        updateOnlineUsers(); // Gọi ngay khi trang tải xong
    </script>

</body>

</html>