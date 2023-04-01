@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<br>
  <div>
<a  id="novou" target="_blank">Nouveau</a>
</div>
<br>
 <div>
  
    <div class="slider">
        <input type="radio" name="toggle" id="btn-1" checked>
        <input type="radio" name="toggle" id="btn-2">
        <input type="radio" name="toggle" id="btn-3">
      
        <div class="slider-controls">
          <label for="btn-1"></label>
          <label for="btn-2"></label>
          <label for="btn-3"></label>
        </div>
      
        <ul class="slides">
          <li class="slide">
            <div class="slide-content">
              <div id="escape">PC portables</div> 
<div id="escape"> 
  <span id="amazing">HP Laptop 15-dw4002nk</span>
</div>


{{-- <p id="css3">a css3 animation demo</p> --}}
              <p class="slide-text">HP Laptop 15-dw4002nk, 
                Windows 11 Édition Familiale unilingue, 
                15.6", Intel® Core™ i7, 8Go RAM, 512Go Disque SSD,
                 NVIDIA® GeForce® MX550, FHD, Argent naturel</p>
              <a id="button_nv_pr" href="#" class="link-contact"> <span class="btn-hover">
        
              </span> affiche plus</a>
            </div>
            <p class="slide-image">
              <img src="{{ asset('/img/Hp.png') }}" alt="stuff" width="500" height="400">
            </p>
          </li>
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">Slide #2</h2>
              <p class="slide-text">Nisi ratione magni ea quis animi incidunt velit voluptate dolorem enim possimus, nam provident excepturi ipsam nihil molestiae minus delectus!</p>
              <a href="#" class="slide-link">Amazing deal</a>
            </div>
            <p class="slide-image">
              <img src="https://placeimg.com/320/240/animals" alt="stuff" width="320" height="240">
            </p>
          </li>
          <li class="slide">
            <div class="slide-content">
              <h2 class="slide-title">Slide #3</h2>
              <p class="slide-text">Quisquam quod ut quasi, vero obcaecati laudantium asperiores corporis ad atque. Expedita fugit dicta maxime vel doloribus sequi, facilis dignissimos.</p>
              <a href="#" class="slide-link">Get started</a>
            </div>
            <p class="slide-image">
              <img src="https://placeimg.com/320/240/any" alt="stuff" width="320" height="240">
            </p>
          </li>
        </ul>
      </div>
 </div>
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto:300');


#escape {
  font-family: Georgia, serif;
  font-size: 32px;
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

#escape:first-of-type {    /* For increasing performance 
                       ID/Class should've been used. 
                       For a small demo 
                       it's okaish for now */
  animation: showup 7s infinite;
}

#escape:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

#escape:last-of-type #amazing {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}




  @keyframes tipsy {
  0 {
    transform: translateX(-50%) translateY(-50%) rotate(0deg);
  }
  100% {
    transform: translateX(-50%) translateY(-50%) rotate(360deg);
  }
}



#novou {
  font-family: helvetica, arial, sans-serif;
  background-color: #9d100e;
  color: #fffbf1;
  text-shadow: 0 20px 25px #2e2e31, 0 40px 60px #2e2e31;
  font-size: 80px;
  font-weight: bold;
  text-decoration: none;
  letter-spacing: -3px;
  margin: 0;
  position: absolute;
  /* top: 50%; */
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}

#novou:before,
#novou:after {
  content: '';
  padding: .9em .4em;
  position: absolute;
  left: 50%;
  width: 100%;
  top: 50%;
  display: block;
  border: 15px solid red;
  transform: translateX(-50%) translateY(-50%) rotate(0deg);
  animation: 10s infinite alternate ease-in-out tipsy;
}

#novou:before {
  border-color: #d9524a #d9524a rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  z-index: -1;
}

#novou:after {
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #d9524a #d9524a;
  box-shadow: 25px 25px 25px rgba(46, 46, 49, .8);
}
    
    #button_nv_pr{
        margin-left: 100px;
    }
    .slider {
  /* background-color:#6b0264;  */
  position: relative;
  width: 90%;
  height: 500px;
  margin: 50px auto;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12),
    0 3px 1px -2px rgba(0, 0, 0, 0.2);
  overflow: hidden;
}

.slider-controls {
  position: absolute;
  bottom: 0px;
  left: 50%;
  width: 200px;
  text-align: center;
  transform: translatex(-50%);
  z-index: 1000;

  list-style: none;
  text-align: center;
}

.slider input[type="radio"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  width: 0;
  height: 0;
}

.slider-controls label {
  display: inline-block;
  border: none;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  cursor: pointer;
  background-color: #212121;
  transition: background-color 0.2s linear;
}

#btn-1:checked ~ .slider-controls label[for="btn-1"] {
  background-color: #ff4081;
}

#btn-2:checked ~ .slider-controls label[for="btn-2"] {
  background-color: #ff4081;
}

#btn-3:checked ~ .slider-controls label[for="btn-3"] {
  background-color: #ff4081;
}

/* SLIDES */

.slides {
  list-style: none;
  padding: 0;
  margin: 0;
  height: 100%;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;

  display: flex;
  justify-content: space-between;
  padding: 20px;
  width: 100%;
  height: 100%;

  opacity: 0;
  transform: translatex(-100%);
  transition: transform 250ms linear;
}

.slide-content {
  width: 400px;
}

.slide-title {
  margin-bottom: 20px;
  font-size: 36px;
  margin-left: 40px;
}

.slide-text {
  margin-bottom: 20px;
  margin-left: 40px;
  font-size: 20px;

}



.slide-image img {
  max-width: 100%;

}

/* Slide animations */
#btn-1:checked ~ .slides .slide:nth-child(1) {
  transform: translatex(0);
  opacity: 1;
}

#btn-2:checked ~ .slides .slide:nth-child(2) {
  transform: translatex(0);
  opacity: 1;
}

#btn-3:checked ~ .slides .slide:nth-child(3) {
  transform: translatex(0);
  opacity: 1;
}

#btn-1:not(:checked) ~ .slides .slide:nth-child(1) {
  animation-name: swap-out;
  animation-duration: 300ms;
  animation-timing-function: linear;
}

#btn-2:not(:checked) ~ .slides .slide:nth-child(2) {
  animation-name: swap-out;
  animation-duration: 300ms;
  animation-timing-function: linear;
}

#btn-3:not(:checked) ~ .slides .slide:nth-child(3) {
  animation-name: swap-out;
  animation-duration: 300ms;
  animation-timing-function: linear;
}

@keyframes swap-out {
  0% {
    transform: translatex(0);
    opacity: 1;
  }

  50% {
    transform: translatex(50%);
    opacity: 0;
  }

  100% {
    transform: translatex(100%);
  }
}

</style>
@endsection