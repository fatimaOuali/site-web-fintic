<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <title>@yield('title', 'search product')</title>
</head>
<body>

  <header>
    <div class="header">
      <div class="logo">
         <a href="{{ route('home.about') }}"> 
          <img src="{{ asset('/img/logo2.png') }}" class="logo-img" alt="logo of webs" >
      </a>
      </div>
      <form  action="{{ url('search')}}" method="GET" role="search">
       
        <div class="d-flex justify-content-center h-100">
          <div class="search">
              <input type="search" name="search" value="" class="search-input" placeholder="Search your product">
          <button  type="submit">
              <a  class="search-icon">
                <i class="fa-solid fa-magnifying-glass" style="color: #66238b;"></i>
                
              </a>
          </button>

          </div>
      </div>
      
      </form>
  </header>
    

    

       
                          <!-- Sidebar -->
                          
  <!-- Sidebar -->
             
    
    <section id="pricing-tables">

        <h1 class="section-title">notre
            <span class="highlight">produits</span>
        </h1>
        <h3 class="section-subtitle"></h3>
        <hr>
        
        <div class="grid">
            @forelse ($viewData["searchProducts"]  as $productItem)
            <div class="col order">
              
                <ul class="price-box">
                    <li class="header">
                        <a id="a_all"href="{{ route('product.show', ['id'=> $productItem->getId()]) }}">
                          {{-- <img class="imgPro" src="{{ asset('/storage/'.$product->image) }}" alt=""> --}}
                          @if ($productItem->productImages->count() > 0)
                          <img class="imgPro" src="{{ 'storage/'.$productItem->productImages->first()->url }}" >
                      @endif
                        </a></li>
                    <li class="emph">
                        <strong>{{ $productItem->getName() }}</strong> </li>
                    <li>
                        <strong>{{ $productItem->getPrice() }} DH</strong></li>
                    <li class="emph">
                        <a id="a_all" href="{{ route('product.show', ['id'=> $productItem->getId()]) }}" class="button">Affiche plus</a>
                    </li>
                </ul>
               
            </div>
            @empty
    <img src="{{ asset('/img/not-found.jpg') }}" alt="">
@endforelse
        </div>
        

    </section>
    <!-- End of pricing tables -->

    <!-- Footer -->
   
    <!-- End of footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>
        // Scroll Reveal Animations
window.sr = ScrollReveal();

sr.reveal(".section-title", {
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});

sr.reveal(".section-subtitle", {
    duration: 1000,
    delay: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    scale: 0.2,
    mobile: false
});

sr.reveal(".left", {
    duration: 2000,
    delay: 2000,
    origin: 'left',
    distance: '300px',
    easing: 'ease-in-out',
    scale: 0.5,
    mobile: false
});

sr.reveal(".right", {
    duration: 2000,
    delay: 2000,
    origin: 'right',
    distance: '300px',
    easing: 'ease-in-out',
    scale: 0.5,
    mobile: false
});

sr.reveal(".order", {
    duration: 2000,
    delay: 2000,
    scale: 0.2,
    easing: 'ease-in-out',
    mobile: false,
    rotate: { x: 0, y: 360, z: 180}
}, 300);

sr.reveal(".ingredient-box", {
    duration: 500,
    delay: 2000,
    scale: 0.1,
    easing: 'ease-in-out',
    mobile: false,
    rotate: {x: 0, y: 0, z: 180}
}, 100);

// Add smooth scrolling to all links
$("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            // window.location.hash = hash;
        });
    } // End if
});
    </script>
</body>

</html>

{{-- @extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<h2 class="headings">notre produit</h2>
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
  <nav id="sidebarMenu" >
    <div class="position-sticky">
        <ul class="menu cf">
          <li>
            <a href="{{ route('product.index')}}">catalogue</a>
            <ul class="submenu">
              @foreach($viewData['categories'] as $category)
              <li><a href="{{ route('product.category', $category->id) }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>			
          </li>
        </ul>
    </div>
  </nav>
  <!-- Sidebar -->

 
@foreach ($viewData["products"] as $product)
<div class="col-md-4 col-lg-4 mb-2">
<div class="card">
  <div class="background-card img-1 card-img-top">
  <a href="{{ route('product.show', ['id'=> $product->getId()]) }}">
<img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
</a>
<div class="card-headings">
<div class="card-body ">
  <div >
    <h5 class="card-title">
{{ $product->getName() }}
</h5>
<h5 class="price-card">{{ $product->getPrice() }} DH</h5>
</div>
</div>
</div>
</div>
</div>
</div>
@endforeach 
@endsection --}}


