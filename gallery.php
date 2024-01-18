<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/gall.css">

		
		<h1 style="font-size:40px;text-align:center; font-family: "Times New Roman", Times, serif;">Gallery</h1>
	<div class="row1" >
	     
  <div class="column1">
    <img src="images/gallery/IMG-1.jpg" style="width:100% ;height:350px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-2.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-6.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-4.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-5.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-10.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column1">
    <img src="images/gallery/IMG-7.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
   <div class="column1">
    <img src="images/gallery/IMG-8.jpg" style="width:100%;height:350px" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
 
  
</div>

<!-- <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="images/gallery/IMG-1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="images/gallery/IMG-2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="images/gallery/IMG-3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="images/gallery/IMG-4.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="images/gallery/IMG-5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="images/gallery/IMG-6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="images/gallery/IMG-7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="images/gallery/IMG-8.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-2.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-3.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-4.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
     <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-5.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>
     <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-6.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
     <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-7.jpg" style="width:100%" onclick="currentSlide(7)" >
  </div>
   <div class="column1" style="padding: 7px;">
      <img class="demo cursor" src="images/gallery/IMG-8.jpg" style="width:100%" onclick="currentSlide(8)" >
  </div>
 
 
</div> 
</div>
-->
<br><br>
 <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		
		<?php include 'footer.php';?>