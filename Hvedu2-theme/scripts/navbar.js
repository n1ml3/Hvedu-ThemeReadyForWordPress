/**
 * navbar.js — Quản lý hiệu ứng của navbar indicator
 */

/**
 * Re-trigger CSS animation của indicator bằng cách
 * xóa rồi thêm lại class active, buộc browser repaint.
 */
function triggerIndicatorAnimation(linkEl) {
    linkEl.classList.remove('active');
    // Force reflow
    void linkEl.offsetWidth;
    linkEl.classList.add('active');
}

/**
 * Khởi tạo navbar.
 */
function initNavbar() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    if (navLinks.length === 0) return;

    // Khi click link, trigger hiệu ứng trước khi trình duyệt chuyển trang
    navLinks.forEach((link) => {
        link.addEventListener('click', function (e) {
            // Nếu click vào link đã active thì chỉ chạy lại hiệu ứng
            if (this.classList.contains('active')) {
                triggerIndicatorAnimation(this);
            } else {
                // Xóa active cũ và thêm vào cái mới
                document.querySelectorAll('.navbar-nav .nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
}

// Khởi chạy
document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
});
