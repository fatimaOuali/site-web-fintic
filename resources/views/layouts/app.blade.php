<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
  

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

    <title>@yield('title', 'FINTIC')</title>
</head>
<body >
    <div class="container1" style="background-image: url('{{ asset('/img/actueil.jpg')}}');">
      
        <div class="header" >
            <div class="logo">
               <a href="{{ route('home.about') }}"> 
                <img src="{{ asset('/img/logo2.png') }}" class="logo-img" alt="logo of webs" >
            </a>
            </div>

            <div class="navbar1" >
                <ul>


                  {{-- <div class="text-center">
                    @if ($viewData["profile"]->userDtail)
                    <img  src="{{ asset('/storage/'.$viewData["profile"]->userDtail->image) }}"  width="160" class="rounded-circle">
                    <span id="name_size" > {{ $viewData["profile"]->name}}</span>
                    @else 
                    <img  src="{{ asset('/img/user.jpg')}}"  width="160" class="rounded-circle">
                    <span id="name_size" > {{ $viewData["profile"]->name}}</span>
                 @endif
                </div>  --}}
            
             {{-- <a class="nav-link active" href="{{ route('product.index') }}">Products</a> --}}
          
    <div class="dropdown">
        <li class="list-items" >
            <a href="{{ route('product.index') }}" class="links-items">
            <button class="dropbtn">Produits</button></a>
              </div>
       </li>
    <div class="dropdown"> 
        <li class="list-items" >
            <a href="{{ route('propos.index') }}" class="links-items">
            <button class="dropbtn">à propos</button></a>
              </div>
       </li>
       <div class="dropdown"> 
        <li class="list-items" >
            <a href="{{ route('commande.index') }}" class="links-items">
            <button class="dropbtn">Demandes de livraison</button></a>
              </div>
       </li>
                    {{-- <div class="dropdown">
                        <li class="list-items" ><a href="#" class="links-items">
                            <button class="dropbtn">formation</button></a>
                                <div class="dropdown-content">
                                  <a href="#">pratique</a>
                                  <a href="#">en ligne</a>
                                </div>
                              </div>
                        </li> --}}
                        <div class="dropdown">
                            <li class="list-items" ><a href="{{ route('message.index') }}" class="links-items">
                                <button class="dropbtn">Contact</button></a>
                                    <div class="dropdown-content">
                                      
                                    </div>
                                  </div>
                            </li>
                          

                            @guest
                            <div class="dropdown">
                               <li class="list-items" >
                            <a href="{{ route('login') }}" class="links-items"><button class="dropbtn">Se connecter</button></a>
                           </div>
                       </li>
                            <div class="dropdown">
                               <li class="list-items" >
                            <a href="{{ route('register') }}" class="links-items"><button class="dropbtn">Créer compte</button></a>
                           </div>
                       </li>
                            @else
                            <div class="dropdown">
                              <li class="list-items" >
                           <a href="{{ route('profile.show') }}" class="links-items"><button class="dropbtn">Mon profile</button></a>
                          </div>
                      </li>
                            <div class="dropdown">
                                <li class="list-items" >
                             <a href="{{ route('myaccount.orders') }}" class="links-items"><button class="dropbtn">Mon commande</button></a>
                            </div>
                        </li>
                            <form id="logout" action="{{ route('logout') }}" method="POST">
                               <div class="dropdown">
                                   <li class="list-items" >
                            <a  class="links-items" onclick="document.getElementById('logout').submit();"><button class="dropbtn">Se déconnecter</button></a>
                           </div>
                       </li>
                               @csrf
                               </form>
                               @endguest
                 
                </ul>
                
            </div>
            
<!-- style-switcher start -->

   <!-- style switcher end -->
  
    <div class="icon-panier">
      
<a id="a_panier" href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i> Mon panier</a>
    </div>
    <li  class="nav-item">
      <a id="a_panier" href="{{route("wishlist.index")}}" class="nav-link">
        <i class="fa fa-heart" style="color: #8755a8;font-size:4vh;"></i>
         Favoris
      </a>

            </li>
            <div class="icon-menu1">
                <i class="fa-solid fa-bars" id="icon"></i>
            </div>
        </div>
        
{{-- -------------- --}}
<div class="container2">
    <h2 class="title">
      <span class="title-word title-word-1">Bienvenue</span>
      <span class="title-word title-word-2">dans</span>
      <br>
      <span class="title-word title-word-3">la</span>
      <span class="title-word title-word-4">Fintic</span>
    </h2>
  </div>

{{-- ---------------- --}}

       
    
    </div>


    <div>
        
            @yield('content')
        </div>
              </div>
            </div>
      
<div class="footer-dark">
    <footer>
         <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Services</h3>
                                <ul id="footer_ul" >
                                    <li><a id="footer_a"  href="{{ route('cart.index') }}">mon panier</a></li>
                                    <li><a id="footer_a" href="{{ route('product.index') }}">produit</a></li>
                                    <li><a id="footer_a" href="{{ route('commande.index') }}">commande</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>About</h3>
                                <ul id="footer_ul">
                                    <li><a id="footer_a" href="{{ route('propos.index') }}">à propos</a></li>
                                    {{-- <li><a id="footer_a" href="#">Team</a></li> --}}
                                    <li><a id="footer_a" href="{{ route('message.index') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>FINTIC</h3>
                                <p>FINTIC est une jeune entreprise dynamique
                                   spécialisée depuis 2016 dans le conseil et les services en nouvelles 
                                   technologies actives au Maroc. Elle assiste les entreprises de toutes tailles, 
                                   les PME comme les grandes entreprises, les organisations, les associations nationales,
                                    les administrations publiques et les collectivités locales. Ainsi que elle les conseille et les accompagne dans la conception de tous les systèmes d’information concernant les programmes de gestion, dans la conception et la réalisation de leurs 
                                  projets internet et fournit à ses clients tous les logiciels indispensables et légaux.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">FINTIC © 2023</p>
                    </div>
                </footer>
            </div>

  

  
</body>
    
<script>
    var a = document.getElementsByClassName('header')[0]
    var b = document.getElementById('icon')
    b.onclick = function (){
        a.classList.toggle('active')
    }
</script>

    




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<style>
    .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark #footer_ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark #footer_ul #footer_a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark #footer_ul #footer_a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}



</style>
</html>
