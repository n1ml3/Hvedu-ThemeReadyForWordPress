(function () {
    'use strict';

    const list = document.querySelector('.course-list');
    if (!list) return;

    let isDragging = false;
    let hasMoved = false; // Flag kiểm tra xem có phải hành động kéo không
    let startX = 0;
    let scrollStart = 0;
    let listLeftOffset = 0; // Cache offset để tối ưu hiệu năng

    list.addEventListener('mousedown', (e) => {
        isDragging = true;
        hasMoved = false;
        listLeftOffset = list.offsetLeft; 
        startX = e.pageX - listLeftOffset;
        scrollStart = list.scrollLeft;
        list.classList.add('is-dragging');
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        
        const x = e.pageX - listLeftOffset;
        const walk = (x - startX) * 1.2;
        
        // Nếu dịch chuyển hơn 5px thì xác định là đang kéo (drag)
        if (Math.abs(walk) > 5) {
            hasMoved = true;
        }
        
        list.scrollLeft = scrollStart - walk;
    });

    // Thêm 'mouseleave' trên document để xử lý khi chuột rời khỏi cửa sổ trình duyệt
    const stopDragging = () => {
        if (!isDragging) return;
        isDragging = false;
        list.classList.remove('is-dragging');
    };

    document.addEventListener('mouseup', stopDragging);
    document.addEventListener('mouseleave', stopDragging);

    // Chặn hành vi click vào link/phần tử con nếu người dùng đang thực hiện kéo chuột
    list.addEventListener('click', (e) => {
        if (hasMoved) {
            e.preventDefault();
            e.stopPropagation();
        }
    }, true); // Dùng useCapture để chặn từ vòng capturing
})();