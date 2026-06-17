// Đợi cấu trúc DOM tải xong hoàn toàn để đảm bảo các thành phần HTML tồn tại trước khi kịch bản chạy
$(document).ready(function() {
  // PHP đã kết xuất Header, Navbar và Footer ở phía máy chủ (Server-Side)
  // Các hiệu ứng tương tác phía Client-Side sẽ được thiết lập ở đây
});

/*
  FAQ Accordion Click Handler:
  - Khi click vào tiêu đề câu hỏi (.faq-header), toggle class 'open' cho khối câu hỏi (.faq-item).
  - Điều chỉnh chiều cao tối đa (max-height) của phần trả lời (.faq-answer) để tạo hiệu ứng trượt mượt mà.
  - Tự động đóng các câu hỏi khác đang mở.
*/
$(document).on("click", ".faq-header", function() {
  const item = $(this).closest(".faq-item");
  const answer = item.find(".faq-answer");
  
  if (item.hasClass("open")) {
    item.removeClass("open");
    answer.css("max-height", "0");
  } else {
    // Đóng các câu hỏi khác đang mở
    $(".faq-item.open").removeClass("open").find(".faq-answer").css("max-height", "0");
    
    item.addClass("open");
    answer.css("max-height", answer[0].scrollHeight + "px");
  }
});

/*
  Course Program Item Click Handler:
  - Khi người dùng click vào một mục khóa học (.course-program-item), làm sáng mục đó bằng class 'active'.
  - Loại bỏ trạng thái 'active' của mục cũ.
  - Đồng thời hoán đổi icon puzzle (màu xanh cho active, màu trắng cho inactive).
*/
$(document).on("click", ".course-program-item", function() {
  const currentActive = $(".course-program-item.active");
  
  // Nếu click vào mục đang active thì bỏ qua
  if (currentActive.is(this)) return;

  // Tắt active của mục cũ và đổi icon của nó về trắng
  if (currentActive.length > 0) {
    currentActive.removeClass("active");
    const activeIcon = currentActive.find(".course-program-icon");
    const activeSrc = activeIcon.attr("src");
    if (activeSrc && !activeSrc.includes("-white.svg")) {
      // Handle template directory mapping or relative paths
      if (activeSrc.indexOf('puzzle.svg') !== -1) {
        activeIcon.attr("src", activeSrc.replace("puzzle.svg", "puzzle-white.svg"));
      }
    }
  }

  // Bật active cho mục mới và đổi icon của nó thành màu xanh (không có -white)
  const newItem = $(this);
  newItem.addClass("active");
  const newIcon = newItem.find(".course-program-icon");
  const newSrc = newIcon.attr("src");
  if (newSrc && newSrc.includes("-white.svg")) {
    newIcon.attr("src", newSrc.replace("puzzle-white.svg", "puzzle.svg"));
  }
});
