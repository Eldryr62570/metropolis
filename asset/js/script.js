let header = document.querySelector(".header");
window.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    header.style.opacity = 0.5;
  } else {
    header.style.opacity = 1;
  }
});
