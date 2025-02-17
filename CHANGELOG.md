# CHANGELOG

## [1.0.0] 
### Added
- Khởi tạo dự án website bán trà sữa PHÚC LONG.
- Thiết lập cấu trúc thư mục với `frontend` và `backend`.
- Tạo giao diện người dùng với Bootstrap, Swiper, Font Awesome, Animate.css.
- Xây dựng trang chủ hiển thị danh sách sản phẩm.
- Tích hợp tính năng tìm kiếm và lọc sản phẩm theo danh mục.
- Thêm chức năng đăng ký, đăng nhập và quản lý phiên đăng nhập bằng PHP Sessions.
- Thiết lập cơ sở dữ liệu MySQL bao gồm bảng người dùng, sản phẩm, đơn hàng, giỏ hàng.
- Xây dựng API xử lý giỏ hàng: thêm/xóa/cập nhật sản phẩm trong giỏ hàng.
- Tích hợp thanh toán trực tuyến qua VNPAY API.
- Chức năng quản trị viên: quản lý sản phẩm, đơn hàng, người dùng, thống kê doanh thu.

## [1.1.0] 
### Added
- Cập nhật giao diện trang sản phẩm với hiệu ứng slider Swiper.
- Thêm chức năng đánh giá và bình luận sản phẩm.
- Cải thiện trải nghiệm tìm kiếm bằng AJAX (hiển thị kết quả tức thời mà không cần tải lại trang).

### Fixed
- Sửa lỗi khi thêm sản phẩm vào giỏ hàng mà không đăng nhập.
- Tối ưu truy vấn MySQL để tăng tốc độ tải trang sản phẩm.

## [1.2.0] 
### Added
- Bổ sung tính năng theo dõi trạng thái đơn hàng.
- Thêm trang lịch sử mua hàng cho khách hàng.
- Tối ưu hiệu suất API, đảm bảo thời gian phản hồi dưới 1 giây.
- Nâng cấp giao diện với hiệu ứng Animate.css cho trải nghiệm mượt mà hơn.

### Fixed
- Cải thiện bảo mật trong xác thực người dùng.
- Fix lỗi giỏ hàng không cập nhật đúng số lượng sản phẩm.

## [1.3.0] 
- Chức năng ưu đãi và mã giảm giá cho khách hàng.
- Hỗ trợ đăng nhập qua Google và Facebook.
- Tích hợp chatbot hỗ trợ khách hàng 24/7.

### Fixed
- Sửa lỗi hiển thị sai tổng tiền trong giỏ hàng khi áp dụng mã giảm giá.
- Cải thiện tốc độ tải trang giỏ hàng bằng cách tối ưu AJAX requests.

## [1.4.0] 
### Added
- Chế độ tối (Dark Mode) cho giao diện người dùng.
- Thống kê chi tiết hơn về doanh số bán hàng theo ngày/tháng/năm.

### Fixed
- Fix lỗi trùng lặp đơn hàng khi thanh toán qua VNPAY.
- Cải thiện bảo mật API bằng cách thêm xác thực JWT cho người dùng.

## [Upcoming]
### Planned
- Bổ sung tính năng đặt trước sản phẩm.
- Hỗ trợ thanh toán bằng VNpay.
