let header = document.querySelector(".header");
console.log("window.scrollY");
window.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    header.style.opacity = 0.5;
  } else {
    header.style.opacity = 1;
  }
});
