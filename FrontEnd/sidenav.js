const toggleBtn = document.querySelector(".icon");
const navbarNav = document.querySelector(".sidenavbar");
const navCloseBtn = document.querySelector(".sidenavbar .closeside");


toggleBtn.addEventListener("click", () => {
  var x = navbarNav.classList.toggle("active");

});
navCloseBtn.addEventListener("click", () => {
    navbarNav.classList.remove("active");
  });
