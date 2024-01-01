<div>
@extends('app')
@section('content')
<style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active2, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="{{asset('image/1.png')}}" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="{{asset('image/2.png')}}" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="{{asset('image/3.png')}}" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
{{-- .....................................slider.................... --}}

{{-- our collection --}}
<div class="bg-[url(image/bgcarpet.jpg)] bg-cover bg-center  py-10" style="background-image: url(image/bgcarpet.jpg);">
    <div class="text-center">
        <h3 class="text-3xl font-bold mb-2" style="font-family: AGaramondPro-Regular;">Our Collections</h3>
    <p class="text-lg">shop by</p>

    <div class="w-[90%] m-auto grid lg:grid-cols-3 gap-5 pt-5">
            <div class="relative"><img src="{{asset("image/img/1.png")}}" alt="">
                <div class="absolute bottom-5 text-3xl font-bold left-10 text-white" >
                    <h4 class="" style="font-family: 'Satisfy', cursive;">Neckless</h4>
                </div>
            </div>
            <div class="relative">
                <img src="{{asset("image/img/2.png")}}" alt="">
                <div class="absolute bottom-5 text-3xl font-bold left-10 text-white" >
                    <h4 class="" style="font-family: 'Satisfy', cursive;">Neckless</h4>
                </div>
            </div>
            <div class="relative">
                <img src="{{asset("image/img/3.png")}}" alt="">
                <div class="absolute bottom-5 text-3xl font-bold left-10 text-white" >
                    <h4 class="" style="font-family: 'Satisfy', cursive;">Earrings</h4>
                </div>
            </div>
    </div>
    </div>
    
</div>
{{-- our collection --}}

{{-- shop by category --}}
<div class="w-[90%] m-auto py-10">
    <h3 class="text-3xl font-bold mb-5 text-center" style="font-family: AGaramondPro-Regular;">Shop by Categorys</h3>
<div class="grid lg:grid-cols-5 grid-cols-2 gap-5 text-center">
    <div>
        <img src="{{asset("image/img/shopbycat1.avif")}}" alt="">
        <h4>Earrings</h4>
    </div>
    <div>
        <img src="{{asset("image/img/shopbycat2.avif")}}" alt="">
        <h4>Bangles</h4>
    </div>
    <div>
        <img src="{{asset("image/img/shopbycat3.avif")}}" alt="">
        <h4>Rings</h4>
    </div>
    <div>
        <img src="{{asset("image/img/shopbycat4.avif")}}" alt="">
        <h4>Necklaces</h4>
    </div>
    <div>
        <img src="{{asset("image/img/shopbycat5.avif")}}" alt="">
        <h4>Gold coin</h4>
    </div>
    
</div>
</div>
{{-- shop by category --}}

{{-- Autograph Collection--}}
<div class=" py-10">
    <h3 class="text-3xl font-bold mb-5 text-center" style="font-family: AGaramondPro-Regular;">Autograph Collection</h3>
    <img src="{{asset("image/img/desk_banner.webp")}}" alt="" class="">

{{-- <div class="grid lg:grid-cols-2 text-center">
    <div>
        <img src="{{asset("image/img/918x788.webp")}}" alt="" class="">
        
    </div>
    <div>
        <img src="{{asset("image/img/BnagleDT.webp")}}" alt="" class="">
       
     
    </div>
</div> --}}
{{-- Autograph Collection --}}

<script>
  let slideIndex = 0;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";  
//       }
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
    </script>

{{-- <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
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
    </script> --}}

@endsection

</div>

