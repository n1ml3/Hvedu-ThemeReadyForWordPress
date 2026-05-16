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

- **Dynamic Navigation**: Hệ thống Menu động, quản lý dễ dàng 100% trong trang quản trị WordPress (Appearance > Menus).
- **Responsive Design**: Tương thích hoàn hảo với mọi thiết bị từ Mobile, Tablet đến Desktop nhờ Bootstrap 5.
- **Custom Page Templates**: Cung cấp các mẫu trang riêng biệt như Trang chủ (Backup), Trang giới thiệu, giúp linh hoạt trong việc xây dựng nội dung.
- **Asset Optimization**: Tất cả hình ảnh và icon được tối ưu hóa, đường dẫn linh hoạt bằng các hàm core của WordPress.
- **Interactive Elements**: Tích hợp các hiệu ứng cuộn, slider khoá học và indicator navbar mượt mà bằng JavaScript.

---

## Cấu trúc thư mục

```text
.
├── Hvedu2-theme/         # Thư mục theme phiên bản 2
├── Hvedu3-theme/         # Thư mục theme phiên bản 3
└── docker-compose.yaml   # Cấu hình môi trường chạy WordPress cục bộ
```

---

## Hướng dẫn cài đặt

1. **Clone repository** về máy của bạn:
   ```bash
   git clone https://github.com/n1ml3/Hvedu-ThemeReadyForWordPress.git
   ```
2. **Copy thư mục theme** bạn muốn sử dụng vào thư mục `wp-content/themes/` của website WordPress của bạn.
3. **Kích hoạt Theme**: Vào trang quản trị WordPress > Appearance > Themes và nhấn **Activate** giao diện Hvedu.
4. **Thiết lập Menu**:
   - Vào Appearance > Menus.
   - Tạo menu mới và tích chọn vị trí **"Primary Menu"** để hiển thị trên Navbar.

---

## Công nghệ sử dụng

- **Core**: WordPress CMS, PHP 8.x
- **Frontend**: Bootstrap 5, Vanilla CSS, JavaScript (ES6+)
- **Tools**: Docker (cho môi trường phát triển)

---

## Ghi chú
Dự án được thực hiện với tiêu chí: *"Readability and Order > Speed and Complex Interconnections"*. Mã nguồn sạch, dễ bảo trì và mở rộng cho các doanh nghiệp giáo dục.

---
*Phát triển bởi n1ml3 cho HVG Education.*
