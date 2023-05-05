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

    <title>@yield('title', 'Product')</title>
</head>
<body>

  <header>
    <div class="header">
      <div class="logo">
         <a href="{{ route('home.about') }}"> 
          <img src="{{ asset('/img/logo2.png') }}" class="logo-img" alt="logo of webs" >
      </a>
      </div>
      <div class="search-container">
      <form  action="{{ url('search')}}" method="GET" role="search">
        <input type="search" placeholder="Search your product" name="search">
              <button type="submit"><i id="search_icon" class="fa fa-search"></i></button> 
      </div>
    </div>
      </form>
  </header>
    

    

       
                          <!-- Sidebar -->
                          <div class="wrap">
                            <span class="decor"></span>
                            <nav>
                              <ul id="ul_catalogue" class="primary">
                                <li class="li_catalogue">
                                  <a id="a_all" class="a_catalogue" href="{{ route('product.index')}}">Catalogue</a>
                                  <ul id="ul_catalogue" class="sub">
                                    @foreach($viewData['categories'] as $category)
                                    <li class="li_catalogue">
                                      <a id="a_all"class="a_catalogue" href="{{ route('product.category', $category->id) }}">
                                      {{ $category->name }}
                                    </a></li>
                                    
                                    @endforeach
                                  </ul>
                                </li>
                              </ul>
                            </nav>
                            </div>
  <!-- Sidebar -->
             
    
    <section id="pricing-tables">

        <h1 class="section-title">notre
            <span class="highlight">produits</span>
        </h1>
        <h3 class="section-subtitle"></h3>
        <hr>
        
        <div class="grid">
          @foreach ($viewData["products"] as $product)
            <div class="col order">
              
                <ul class="price-box">
                    <li class=" ">
                        <a id="a_all"href="{{ route('product.show', ['id'=> $product->getId()]) }}">
                          {{-- <img class="imgPro" src="{{ asset('/storage/'.$product->image) }}" alt=""> --}}
                          @if ($product->productImage->count() > 0)
                          <img id="img_ind" class="imgPro" src="/{{ $product->productImage->image }}" >
                      @endif
                        </a></li>
                    <li class="emph">
                        <strong>{{ $product->getName() }}</strong></li>
                    <li>
                        <strong>{{ $product->getPrice() }} DH</strong></li>
                    <li class="emph">
                        <a id="a_all" href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="button">Affiche plus</a>
                    </li>
                </ul>
               
            </div>
            @endforeach
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
    <style>



.search-container {
  float: right;
}

input[type=search] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ba86b1;
}


    </style>
</body>

</html>




