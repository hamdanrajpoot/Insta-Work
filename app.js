let C_icon = document.querySelector(".comment-icon");
let overlay = document.querySelector(".overlay");
let close_btn = document.querySelector(".close-overlay");
let content = document.querySelector(".my-overlay-content");
C_icon.addEventListener("click", () => {
  overlay.classList.remove("d-none");
  overlay.classList.add("d-flex");
  content.classList.add("animate-content");
});
close_btn.addEventListener("click", () => {
  overlay.classList.remove("d-flex");
  overlay.classList.add("d-none");
  content.classList.remove("animate-content");
});
