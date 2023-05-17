<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<title>@yield('title', $viewData["title"])</title>
</head>
<style>
    ::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-track{
    background-color: transparent;
}
::-webkit-scrollbar-thumb{
    background-color:rgb(196, 26, 248);
    border-radius: 30px;
}


    body{
        background-image:url(../img/profile_bg.png) ;
}

.card{
    border:none;
    height: 150%;
    /* position:relative; */
    margin-top: 40px;
    overflow:hidden;
    border-radius:8px;
    justify-content:center;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:22px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
#name_size{
    font-size: 25px;
    
}
#icon_profl{
    font-size: 30px;
    padding: 30px 30px;
    }
    a i {
        color: #aa24a1;
    }
</style>
<body>
    
   
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
               
    
                <div class="text-center">
                   
                    <img  src="{{ asset('/storage/'.$viewData["profile"]->image) }}"  width="160" height="150"  class="rounded-circle">
                     
                    
               
                </div> 
                
                <div class="text-center mt-3">
                    <span id="name_size" class="bg-secondary p-1 px-4 rounded text-white">{{ $viewData["profile"]->name}}</span>
                    <h5 class="mt-2 mb-0">{{ $viewData["profile"]->email}}</h5>
                   
                    <span>{{ $viewData["profile"]->phone}}</span>
                     
                  

               
                    
                    <div class="px-4 mt-1">
                       
     <p class="fonts">{{ $viewData["profile"]->address}}  </p>
                     
    

                  

                    </div>
                    
                     <ul class="social-list">
            <li><a href="{{ route('home.about') }}"> <i class="fa-solid fa-house"></i></a></li>
                        <li><a href="{{ route('wishlist.index') }}"><i class="fa fa-heart"></i></a></li>
                        <li> <a  href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li><a  href="{{ route('message.index') }}"><i class="fa-solid fa-message"></i></a></li>
                    </ul>
                    
                    <div class="buttons">
                        
                    <a href="{{ route('profile.index') }}">
                        <button class="btn btn-outline-primary px-4">Modifier</button></a>
                        
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>


</body>
</html>