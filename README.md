# Hvedu WordPress Themes Collection

Chào mừng bạn đến với bộ sưu tập các giao diện WordPress chất lượng cao được thiết kế riêng cho **HVG Education**. Repository này chứa hai phiên bản giao diện (Hvedu2 và Hvedu3) đã được chuyển đổi từ bản thiết kế Figma sang WordPress Theme hoàn chỉnh.

---

## Tổng quan các Theme

### 1. Hvedu2 Theme
Giao diện tập trung vào sự chuyên nghiệp, hiện đại với bố cục rõ ràng, phù hợp cho các trang giáo dục doanh nghiệp.

![Hvedu2 Screenshot](./Hvedu2-theme/screenshot.png)

### 2. Hvedu3 Theme
Phiên bản cải tiến với phong cách trẻ trung hơn, sử dụng các hình khối sáng tạo và màu sắc bắt mắt.

![Hvedu3 Screenshot](./Hvedu3-theme/screenshot.png)

---

## Tính năng nổi bật

- **Quản lý nội dung động (100% Dynamic)**: Hỗ trợ chuyển đổi toàn bộ trang từ HTML tĩnh sang nội dung động, dễ dàng quản lý thông qua trang quản trị WordPress Admin và Customizer.
- **Custom Post Types (CPTs) & Metaboxes**: 
  - **Hvedu2 Theme**: Đăng ký các CPT: Khóa học (`hvedu_course`), Dịch vụ (`hvedu_service`), Tài liệu (`hvedu_document`), Ý kiến học viên (`hvedu_testimonial`), Yêu cầu liên hệ (`hvedu_contact`).
  - **Hvedu3 Theme**: Đăng ký các CPT: Khóa học (`hvedu3_course`), Danh mục (`hvedu3_category`), Câu hỏi thường gặp (`hvedu3_faq`), Ý kiến học viên (`hvedu3_testimonial`), Yêu cầu liên hệ (`hvedu3_contact`).
  - Tích hợp các Custom Metaboxes tùy biến để nhập thông tin chi tiết như giá tiền, số lượng bài học, hình thức học, thông tin giảng viên, rating...
- **WordPress Customizer**: Tùy chỉnh trực tiếp các thông tin tĩnh (Hero banner, tiêu đề, mô tả, chỉ số thống kê, ảnh collage, liên kết nút bấm, địa chỉ, hotline chân trang) thông qua **Appearance > Customize** với xem trước thời gian thực (Live Preview).
- **AJAX Contact Submission**: Xử lý gửi biểu mẫu liên hệ không tải lại trang (AJAX), lưu tự động dưới dạng bài viết CPT Contact để admin tiện quản lý đồng thời gửi email thông báo về cho quản trị viên.
- **Auto-Seeding Dummy Data**: Tự động tạo và lưu dữ liệu mẫu cho các CPT và Customizer ngay khi kích hoạt theme lần đầu tiên, giúp hiển thị đầy đủ giao diện đẹp mắt đúng theo bản thiết kế Figma ngay lập tức.
- **Dynamic Navigation**: Hệ thống Menu động, quản lý dễ dàng trong trang quản trị WordPress (Appearance > Menus).
- **Responsive Design**: Tương thích hoàn hảo với mọi thiết bị từ Mobile, Tablet đến Desktop nhờ Bootstrap 5 và Vanilla CSS.
- **Asset Optimization**: Tất cả hình ảnh và stylesheet được quản lý và tối ưu hóa thông qua các hàm core của WordPress, tự động đính kèm version bypass cache khi phát triển.

---

## Cấu trúc thư mục và Giải thích các file

Mỗi theme (Hvedu2 và Hvedu3) đều bao gồm các file lõi sau đây. Việc phân chia này giúp mã nguồn tuân thủ nguyên lý SOLID, dễ đọc và dễ bảo trì:

### Các file cốt lõi (Core Files)
- **header.php**: Chứa phần đầu của trang web (thẻ head, khai báo meta, thư viện) và thanh điều hướng Navbar. Được gọi ở mọi trang thông qua hàm `get_header()`.
- **footer.php**: Chứa phần chân trang (chứa thông tin liên hệ, form đăng ký AJAX, copyright). Được gọi ở mọi trang thông qua hàm `get_footer()`.
- **functions.php**: File chứa các cấu hình logic của theme, nạp các thư viện bổ trợ trong thư mục `inc/`, đăng ký Menu, và quản lý tự động seeding dữ liệu mẫu.
- **style.css**: File bắt buộc của WordPress chứa thông tin khai báo Theme (Tên theme, Tác giả, Phiên bản).

### Các thành phần mở rộng (`inc/`)
- **inc/post-types.php**: Đăng ký toàn bộ Custom Post Types cùng Custom Metaboxes hỗ trợ nhập liệu nâng cao cho từng theme.
- **inc/customizer.php**: Cấu hình các settings/controls tùy chỉnh các phần nội dung của Hero, Stats, CTA, Footer.
- **inc/contact-handler.php**: Xử lý dữ liệu gửi lên qua cổng AJAX từ client, làm sạch dữ liệu, tạo bài viết mới trong CPT Contact và gửi email báo cáo.

### Các file giao diện (Template Files)
- **page.php**: Chịu trách nhiệm hiển thị giao diện cho các Trang tĩnh (Static Page) như "Giới thiệu", "Liên hệ".
- **single.php**: Chịu trách nhiệm hiển thị giao diện chi tiết của một Bài viết (Post).
- **archive.php**: Chịu trách nhiệm hiển thị danh sách các bài viết theo Chuyên mục (Category), Thẻ (Tag), hoặc Tác giả dưới dạng lưới (Grid).
- **index.php**: File dự phòng cuối cùng (Fallback) của hệ thống WordPress, đóng vai trò làm trang danh sách Blog chính.
- **front-page.php**: Template riêng cho trang chủ hiển thị toàn bộ các phần Hero, CPT Courses, CPT FAQs, Testimonials, CTA.
- **page-introduce.php** (Hvedu2): Template tùy biến dành riêng cho trang giới thiệu.

---

## Hướng dẫn cài đặt và Sử dụng

### 1. Cài đặt
1. **Clone repository** về máy của bạn:
   ```bash
   git clone https://github.com/n1ml3/Hvedu-ThemeReadyForWordPress.git
   ```
2. **Copy thư mục theme** (`Hvedu2-theme` hoặc `Hvedu3-theme`) vào thư mục `wp-content/themes/` của website WordPress của bạn.
3. **Kích hoạt Theme**: Vào trang quản trị WordPress > Appearance > Themes và nhấn **Activate** giao diện Hvedu mong muốn.
   * *Lưu ý*: Ngay khi kích hoạt, hệ thống sẽ tự động tạo dữ liệu mẫu (Courses, FAQs, Testimonials, Categories) để hiển thị giao diện mẫu đầy đủ.

### 2. Thiết lập cấu hình ban đầu
1. **Thiết lập Menu**:
   - Vào Appearance > Menus.
   - Tạo menu mới và tích chọn vị trí **"Primary Menu"** để hiển thị trên Navbar.
2. **Thiết lập Trang chủ & Blog**:
   - Tạo một trang trống đặt tên là "Trang chủ" và chọn Template là "Default template".
   - Tạo một trang trống đặt tên là "Tin tức" (hoặc Blog).
   - Vào Settings > Reading (Đọc).
   - Ở mục Bố cục trang chủ (Your homepage displays), chọn "Một trang tĩnh" (A static page).
   - Ở phần "Homepage" chọn "Trang chủ", phần "Posts page" chọn "Tin tức".
   - Nhấn Lưu thay đổi.

### 3. Hướng dẫn quản lý nội dung
- **Cập nhật nội dung lặp lại (Khóa học, Slider, FAQ, v.v.)**: Sử dụng các menu CPT mới xuất hiện trên sidebar bên trái màn hình Admin (như **Khóa học**, **Danh mục**, **Hỏi đáp**, **Ý kiến học viên**). Nhấn "Add New" hoặc chỉnh sửa bài viết cũ.
- **Tùy biến nội dung tĩnh & Số liệu**: Vào **Appearance > Customize** (Giao diện > Tùy biến), chọn các section tương ứng (Hero, Stats, CTA, Footer) và điền nội dung mong muốn, sau đó nhấn **Publish**.
- **Theo dõi yêu cầu liên hệ**: Các thông tin khách hàng điền vào form liên hệ ở chân trang sẽ được gửi trực tiếp về menu **Yêu cầu liên hệ** trong WordPress Admin giúp quản trị viên dễ dàng quản lý.

---

## Công nghệ sử dụng

- **Core**: WordPress CMS, PHP 8.x
- **Frontend**: Bootstrap 5, Vanilla CSS, JavaScript (ES6+), jQuery (AJAX form submission)
- **Tools**: Docker (cho môi trường phát triển)

