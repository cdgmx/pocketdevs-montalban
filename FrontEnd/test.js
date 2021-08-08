// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};



function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = ".5rem";
    document.getElementById("navbar").style.backgroundColor = "beige";
    document.getElementById("logo").style.fontSize = "30px";
    document.getElementById("navbar-buttons").style.fontSize ="1.5rem";
    document.getElementById("logo").getElementsByTagName("img")[0].style.display ="none";

  } else {
      
    document.getElementById("navbar").style.padding = "1rem";
    document.getElementById("navbar").style.backgroundColor = "transparent";
    document.getElementById("logo").style.fontSize = "1rem";
    document.getElementById("navbar-buttons").style.fontSize ="2rem";
    document.getElementById("logo").getElementsByTagName("img")[0].style.display ="inline";
  }
}