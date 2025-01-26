<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vị trí cửa hàng</title>
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include_once 'header.php'; ?>
    <style>
        
        .map-container {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        
        .info-box {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Tiêu đề địa chỉ -->
        <h1 class="text-center mb-4">Địa chỉ cửa hàng Phúc Long Tea & Coffee</h1>
        <p class="text-center fs-4 fw-bold">Phúc Long Tea & Coffee, Hà Nội, Việt Nam</p>

        

        <!-- Phần bản đồ -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="map-container">
                    <!-- Google Maps nhúng -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0361118249134!2d105.84666731537389!3d21.02944348599225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5f8a8b9389%3A0x9d61515c9ea32c3d!2zRmHhuqF1YyBMb25nIFRlYSAmIENvZmZlZQ!5e0!3m2!1svi!2s!4v1700000000000!5m2!1svi!2s"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

    </div>

    <?php include_once 'footer.php'; ?>
    <!-- Link Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
