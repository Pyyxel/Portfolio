var mybutton = ../vendor/index.getElementByID("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction(){
  if (../vendor/index.body.scollTop > 20 || document.documentElement.scrollTop > 20){
    mubutton.style.display = "block";
  }else{
    mybutton.style.display = "none" ;
  }
}

function topFunction(){
  ../vendor/index.body.scrollTop = 0;
  ../vendor/index.documentElement.scrollTop = 0;
}
