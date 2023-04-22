@extends('layouts.index')
@section('title', $viewData["title"])
@section('content')
<!-- About us section start -->
@if(session('status'))
<script>
  smal('{{session('status')}}')
  </script>
  @endif

<div class="about">
    <div class="slide active">
    <div class="container">
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{session('message') }}
      </div>
      @endif
        <div class="row product_data">
            <div class="col-lg-6 col-md-12">
                <div class="content">
                <h1 class="heading-content fw-bold">{{ $viewData["product"]["name"] }} </h1>
    <p class="paragraph">
        <h5 class="card-title"></h5>
        <h5 class="price-card">
{{ $viewData["product"]->getName() }} ({{ $viewData["product"]->getPrice() }}DH)</h5>
    
    </p>
    <div class="col-md-6 item text">
      <h3>Detail</h3>
      <p>{{ $viewData["product"]->getDescription() }}</p>
      </div>
  
    {{-- <a href="#" class="link-contact"> <span class="btn-hover">
    
    </span> Add to Cart</a> --}}
  <input type="hidden" value="{{$viewData['product']->getId()}}" class="product_id">      

    <p class="card-text">
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
        <div class="row">
        @csrf
        <div class="col-auto">
        <div class="input-group col-auto">
        <div class="input-group-text">Quantité</div>
        <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
        </div>
        </div>
        <div class="col-auto">
        <button id="btn_favoris2" class="btn btn-sucess  me-3 float-start"  type="submit" >Ajouter au panier</button>
        
        </div>
        </div>
        </form>
<button type="button" id="btn_favoris" class="btn btn-sucess  me-3 addToWishlist float-start"><i class="fa fa-heart" id="btn_heart"></i>ajouter au favoris</button> 
       
        </p>
    
        
                    </div>
    
                </div>
    <div class="col-lg-6 col-md-12">
        <div class="img-settings">
            {{-- <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="img-fluid rounded-start">
             --}}
             @foreach($viewData['product']->productImages as $image)
             <div id="image_slid" class="mySlides">
               <img src="{{ asset($image->image)}}" class="img-fluid rounded-start" >
             </div>
           @endforeach
           <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-circle-chevron-left" style="color: #695d6f;"></i></a>
           <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-circle-chevron-right" style="color: #695d6f;"></i></a>
         
          
         
           <div class="row">
             <div id="row_slider">
             @foreach($viewData['product']->productImages as $image)
             <div class="column">
               {{-- <img class="demo cursor" src="{{ asset($image->image)}}"  style="width:30%" onclick="currentSlide(n)" > --}}
             </div>
             @endforeach
           </div>
         </div>
         </div>

        </div>
    </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- About us section end -->





<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      for(var i = 0; i < slides.length; i++) {
     n=n+i;
        showSlides(slideIndex = n);
  
    }
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
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
    <style>
      
      
      * {
        box-sizing: border-box;
      }
      #btn_heart{
        color: #ffffff;
        font-size:2.5vh;
        margin-right: 4px;
      }
      #btn_heart:hover{
        color: red;
      }
      #btn_favoris{
        margin-left: 350px;
        margin-top: -38px;
        /* text-transform: uppercase; */
        background-image: linear-gradient(to right top, #67165e,
    #f6a7ff,#e600ad,#b204c5);
    border-radius: 10px;
    z-index: 5;
    position: relative;
      }
      #btn_favoris:hover {
        position: absolute;
   
    background-image: linear-gradient(to right , #ef16ce,
    rgb(217, 0, 255) , #ff00ea, #f338d0,#d60fbf);
    border-radius: 10px;
    overflow: hidden;
    z-index: -1;
    transition: 0.6s ease-in-out;
      }

      #btn_favoris2{ 
        background-image: linear-gradient(to right top, #67165e,
    #f6a7ff,#e600ad,#b204c5);
    border-radius: 10px;
    z-index: 5;
    position: relative;
    
      }

      #btn_favoris2:hover {
        position: absolute;
   
    background-image: linear-gradient(to right , #ef16ce,
    rgb(217, 0, 255) , #ff00ea, #f338d0,#d60fbf);
    border-radius: 10px;
    overflow: hidden;
    z-index: -1;
    transition: 0.6s ease-in-out;
      }

      img {
        vertical-align: middle;
      }
      #row_slider{
        width: 33%;
      }
      
      /* Position the image container (needed to position the left and right arrows) */
      .container {
        position: relative;
      }
      /* #image_slid{
        width: 100%;
        height: 100%;
      } */
      /* Hide the images by default */
      .mySlides {
        display: none;
      }
      
      /* Add a pointer when hovering over the thumbnail images */
      .cursor {
        cursor: pointer;
      }
      
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: 10%;
        color: white;
        font-weight: bold;
        font-size: 50px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }
      
      /* Position the "next button" to the right */
      .next {
        right: 1%;
        border-radius: 3px 0 0 3px;
      }
      
      /* On hover, add a black background color with a little bit see-through */
     
      
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      
      /* Container for image text */
      .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
      }
      
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* Six columns side by side */
      .column {
        float: left;
        width: 16%;
        /* width: 30%; */
      }
      
      /* Add a transparency effect for thumnbail images */
      .demo {
        opacity: 0.7;
      }
      
      .active,
      .demo:hover {
        opacity: 1;
      }
      </style>
      <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
      <script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
    
        <script>
          $(document).ready(function() {
        $('.addToWishlist').click(function(e) {
      e.preventDefault();
      var product_id = $(this).closest('.product_data').find('.product_id').val();
       
    
     
    
      $.ajax({
        methode: "POST",
        url: "/addwishlist",
        data:{
          'product_id':product_id,
        },
        success:function(response){
          swal(response.status);
        }
      })
    });
    });
        </script>
@endsection

  