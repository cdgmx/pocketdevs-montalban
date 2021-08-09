const toggleBtn = document.querySelector(".navbar-toggle");
const navbarNav = document.querySelector(".navbar-nav");
const navCloseBtn = document.querySelector(".navbar-nav .nav-close-btn");


toggleBtn.addEventListener("click", () => {
  var x = navbarNav.classList.toggle("active");
  console.log(x)

});
navCloseBtn.addEventListener("click", () => {
    navbarNav.classList.remove("active");

  });
