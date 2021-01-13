window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "8px 16px";
    document.getElementById("logo").style.height = "35px";
  } else {
    document.getElementById("navbar").style.padding = "16px 16px";
    document.getElementById("logo").style.height = "45px";
  }
}