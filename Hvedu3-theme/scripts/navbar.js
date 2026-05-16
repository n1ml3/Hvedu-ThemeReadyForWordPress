/**
 * navbar.js — Quản lý hiệu ứng của navbar indicator (Hvedu3)
 */

function triggerIndicatorAnimation(linkEl) {
    linkEl.classList.remove('active');
    void linkEl.offsetWidth; // Force reflow
    linkEl.classList.add('active');
}

function initNavbar() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    if (navLinks.length === 0) return;

    navLinks.forEach((link) => {
        link.addEventListener('click', function (e) {
            if (this.classList.contains('active')) {
                triggerIndicatorAnimation(this);
            } else {
                document.querySelectorAll('.navbar-nav .nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
});
