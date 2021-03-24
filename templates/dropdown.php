
<!-- <script language="JavaScript" type="text/javascript" src="/jquery-3.6.0.js"></script> -->

<script type="text/javascript">
function dropDown() {
  var lists = document.getElementsByClassName('get-li');
  if (lists[0].classList.contains("displayNone")){
    for(var i = 0; i < lists.length; i++){
    lists[i].classList.replace("displayNone", "displayBlock")
    }
  }
  else if (lists[0].classList.contains("displayBlock")) {
    for(var i = 0; i < lists.length; i++){
    lists[i].classList.replace("displayBlock", "displayNone")
  }
}
}



var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


</script>

