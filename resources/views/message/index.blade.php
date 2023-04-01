<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <title>@yield('title', 'Contact')</title>
</head>
<body>
    {{-- contact.jpg --}}
    <div class="container1" style="background-image: url('{{ asset('/img/contact.jpg')}}');">

    <div class="header" >
        <div class="logo">
           <a href="{{ route('home.about') }}"> 
            <img src="{{ asset('/img/logo2.png') }}" class="logo-img" alt="logo of webs" >
        </a>
        </div>
    </div>

<section class="get-in-touch">
   <h1 class="title">Contact</h1>
   <form class="contact-form row" method="POST" action="{{ route('message.store') }}">
    @csrf
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus required>
         <label class="label" for="name">Name</label>
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
        @enderror
      </div>
      
      
       <div class="form-field col-lg-6 ">
         <input id="phone" type="email" class="input-text js-input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>
         <label class="label" for="email">Email</label>
         @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input"  class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus type="text" required>
         <label class="label" for="message">Message</label>
        @error('message')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-field col-lg-12">
         <a href="{{ route('message.index') }}"> <button type="button" class="submit-btn" data-bs-dismiss="modal" >Annuler</button>
         <button class="submit-btn" type="submit" value="Submit">Envoyer </button>
      </div>
      
   </form>
</section>

<div>
    @if(session()->has('success'))
    <div class="alert success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('success')}}
  </div>
    @endif
  </div>
</div>
<div class="footer-dark">
    <footer>
         <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Services</h3>
                                <ul id="footer_ul" >
                                    <li><a id="footer_a"  href="#">Web design</a></li>
                                    <li><a id="footer_a" href="#">Development</a></li>
                                    <li><a id="footer_a" href="#">Hosting</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>About</h3>
                                <ul id="footer_ul">
                                    <li><a id="footer_a" href="#">Company</a></li>
                                    <li><a id="footer_a" href="#">Team</a></li>
                                    <li><a id="footer_a" href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Company Name</h3>
                                <p>Praesent sed lobortis mi.
                                     Suspendisse vel placerat ligula.
                                      Vivamus ac sem lacus.
                                       Ut vehicula rhoncus elementum.
                                        Etiam quis tristique lectus.
                                         Aliquam in arcu eget velit
                                          pulvinar dictum vel in justo.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">Company Name © 2018</p>
                    </div>
                </footer>
            </div>
  
</body>
</html>
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
    .container1 {
    width: 100%;
    height: 115vh;
    background-image: linear-gradient(rgba(14 , 100 , 230 , 0.3),rgba(122, 14, 230, 0.3));
     background-position: center;
     background-size: cover;

}
.logo-img{
    width:400px;
}
    .alert{
  width:50%;
  margin:20px auto;
  padding:30px;
  position:relative;
  border-radius:5px;
  box-shadow:0 0 15px 5px #ccc;
}
.close{
  position:absolute;
  width:30px;
  height:30px;
  opacity:0.5;
  border-width:1px;
  border-style:solid;
  border-radius:50%;
  right:15px;
  top:25px;
  text-align:center;
  font-size:1.6em;
  cursor:pointer;
}

    .header{
    width: 100%;
    height: 110px;
    padding: 5px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(43, 6, 44, 0.612);
    position: relative;
}

    .get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


</style>
{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">contact</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('message.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">Message</label>

                            <div class="col-md-6">
                                <textarea id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus></textarea>
                                  
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                       <a href="{{ route('message.index') }}"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Annuler</button>                       
                       </a>
                                <button type="submit" class="btn bg-primary text-white">
                                   Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    @if(session()->has('success'))
    <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
    {{session()->get('success')}}
  </div>
    @endif
  </div>

@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}

