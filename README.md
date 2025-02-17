# 🏪 Website Bán Trà Sữa PHÚC LONG 🍵  

## 1️⃣ Giới thiệu  
Website **PHÚC LONG** cung cấp nền tảng đặt hàng trực tuyến cho các sản phẩm trà, cà phê và bánh ngọt chính hãng. Hệ thống có giao diện thân thiện, dễ sử dụng, giúp khách hàng tìm kiếm sản phẩm và đặt hàng nhanh chóng.  

Ngoài ra, website hỗ trợ quản lý đơn hàng, giỏ hàng và thanh toán trực tuyến. Đối với quản trị viên, hệ thống cung cấp công cụ quản lý sản phẩm, đơn hàng và thống kê doanh thu.  

---

## 2️⃣ Tổ chức chương trình  

### 2.1 Công nghệ sử dụng  

📌 **Ngôn ngữ lập trình:**  
- **Back-end:** PHP  
- **Front-end:** HTML, CSS, JavaScript  
- **Cơ sở dữ liệu:** MySQL  

📌 **Công cụ hỗ trợ:**  
- **MySQL Workbench**: Quản lý cơ sở dữ liệu.  
- **Postman**: Kiểm tra API.  
- **GitHub**: Quản lý mã nguồn và làm việc nhóm.  

---

### 2.2 Chức năng  

#### 🔹 Chức năng cho khách hàng  
✅ **Đăng ký & Đăng nhập:**  
- Người dùng có thể tạo tài khoản cá nhân.  
- Đăng nhập để lưu thông tin đơn hàng và phương thức thanh toán.  

✅ **Xem sản phẩm:**  
- Danh sách sản phẩm được phân loại theo danh mục (trà sữa, cà phê, bánh ngọt, v.v.).  
- Hỗ trợ tìm kiếm và lọc sản phẩm theo tên, giá và loại đồ uống.  

✅ **Chi tiết sản phẩm:**  
- Hiển thị đầy đủ thông tin sản phẩm, giá, hình ảnh và mô tả.  
- Đánh giá và bình luận sản phẩm.  

✅ **Giỏ hàng & Đặt hàng:**  
- Thêm/xóa sản phẩm vào giỏ hàng.  
- Cập nhật số lượng sản phẩm trong giỏ hàng.  
- Đặt hàng trực tuyến và chọn phương thức thanh toán.  

✅ **Thanh toán & Theo dõi đơn hàng:**  
- Hỗ trợ thanh toán trực tuyến qua **VNPay API**.  
- Theo dõi trạng thái đơn hàng theo thời gian thực.  

#### 🔹 Chức năng cho quản trị viên  
✅ **Quản lý sản phẩm:**  
- Thêm, sửa, xóa sản phẩm.  
- Cập nhật trạng thái (còn hàng/hết hàng).  

✅ **Quản lý đơn hàng:**  
- Xác nhận, hủy đơn hàng.  
- Cập nhật trạng thái đơn hàng (chờ xử lý, đang giao, đã giao).  

✅ **Quản lý người dùng:**  
- Xem danh sách khách hàng & thông tin tài khoản.  
- Phân quyền người dùng (Admin/Khách hàng).  

✅ **Thống kê & Báo cáo:**  
- Thống kê doanh thu theo ngày, tháng, năm.  
- Xem báo cáo số lượng đơn hàng và sản phẩm bán chạy.  

---

### 2.3 Công nghệ chi tiết  

#### 2.3.1 Giao diện người dùng (Frontend)  
📌 **Bootstrap**  
- Framework CSS giúp xây dựng giao diện responsive.  
- Các thành phần sử dụng:  
  - **Thanh điều hướng**: Điều hướng các mục trong ứng dụng.  
  - **Grid system**: Chia bố cục linh hoạt, tạo layout responsive.  
  - **Button, Form, Modal**: Tạo giao diện nhập liệu đồng nhất.  

📌 **Swiper**  
- Thư viện JavaScript tạo hiệu ứng slider mượt mà.  
- Ứng dụng dùng Swiper để hiển thị sản phẩm trượt ngang, giúp nâng cao trải nghiệm người dùng.  

📌 **Font Awesome**  
- Cung cấp các biểu tượng hỗ trợ trực quan cho người dùng.  
- Ứng dụng sử dụng icon **giỏ hàng, tìm kiếm, thông báo** để cải thiện giao diện.  

📌 **Animate.css**  
- Thư viện tạo hiệu ứng động cho giao diện.  
- Ứng dụng sử dụng hiệu ứng xuất hiện, thay đổi mượt mà khi tương tác.  

---

#### 2.3.2 Xử lý phía máy chủ (Backend)  

📌 **Ngôn ngữ lập trình PHP**  
- PHP thực hiện xử lý yêu cầu HTTP, tương tác cơ sở dữ liệu, tạo nội dung động.  

📌 **Ứng dụng chính của PHP**  
- **Đăng nhập, đăng ký**: Xử lý dữ liệu, xác minh mật khẩu, mã hóa và lưu trữ an toàn.  
- **Giỏ hàng**: Thêm, cập nhật, xóa sản phẩm và tính tổng giá trị.  
- **Quản lý sản phẩm**: Thực hiện các thao tác CRUD với cơ sở dữ liệu.  
- **Thanh toán**: Tích hợp **VNPAY API** để xử lý giao dịch và cập nhật trạng thái.  

📌 **Hoạt động của PHP**  
- Tiếp nhận yêu cầu HTTP và truy vấn dữ liệu MySQL.  
- Quản lý phiên người dùng thông qua **session và cookies**.  

---

#### 2.3.3 Cơ sở dữ liệu (MySQL)  

📌 **MySQL**  
- Hệ quản trị cơ sở dữ liệu quan hệ mã nguồn mở, hiệu suất cao.  
- Dữ liệu lưu trữ gồm:  
  - **Người dùng**  
  - **Sản phẩm**  
  - **Đơn hàng**  
  - **Giỏ hàng**  
  - **Giao dịch thanh toán**  

---

#### 2.3.4 Tương tác và xử lý dữ liệu (JavaScript và AJAX)  

📌 **JavaScript và AJAX**  
- **JavaScript** giúp xử lý sự kiện và tương tác động.  
- **AJAX** gửi & nhận dữ liệu từ máy chủ mà không cần tải lại trang.  

📌 **Ứng dụng JavaScript và AJAX**  
- **Thêm sản phẩm vào giỏ hàng**: Xử lý sự kiện nhấp chuột và cập nhật giỏ hàng qua AJAX.  
- **Cập nhật giỏ hàng**: Thay đổi số lượng hoặc xóa sản phẩm qua AJAX.  
- **Xử lý thanh toán**: Gửi dữ liệu thanh toán qua AJAX giúp quy trình nhanh hơn.  
- **Tăng trải nghiệm người dùng**: AJAX hỗ trợ tìm kiếm, lọc sản phẩm và tải dữ liệu không gián đoạn.  

📌 **Lợi ích**  
- **Tăng tốc độ ứng dụng**.  
- **Cải thiện trải nghiệm người dùng** (không cần tải lại trang).  
- **Giảm băng thông**, chỉ gửi dữ liệu cần thiết.  

---

## 3️⃣ Tính sử dụng và áp dụng  

### 3.1 Đối tượng sử dụng  
👥 **Khách hàng:** Người có nhu cầu đặt mua trà sữa, cà phê trực tuyến.  
👨‍💼 **Quản trị viên:** Nhân viên cửa hàng quản lý sản phẩm, đơn hàng.  

### 3.2 Lĩnh vực áp dụng  
🛒 **Thương mại điện tử (E-commerce):** Website có thể áp dụng vào kinh doanh thực tế, giúp đặt hàng nhanh chóng.  
📊 **Quản lý bán hàng:** Hỗ trợ theo dõi sản phẩm, doanh thu và khách hàng.  

---

## 4️⃣ Kết quả dự kiến  
✅ Hoàn thiện đầy đủ các chức năng đặt hàng, thanh toán & quản lý.  
✅ Giao diện trực quan, dễ sử dụng trên cả PC và Mobile.  
✅ Hệ thống API phản hồi dưới **1 giây** khi truy vấn sản phẩm hoặc đặt hàng.  
✅ Tích hợp thanh toán trực tuyến nhanh chóng, an toàn.  

---

💚 **Hãy cùng thưởng thức trà sữa PHÚC LONG theo cách tiện lợi nhất!** 🍵✨  
