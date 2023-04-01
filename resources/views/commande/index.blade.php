<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <!------ Include the above in your HEAD tag ---------->
    <title>@yield('title', 'Commande')</title>
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
   <h1 class="title">Commande</h1>
   <form class="contact-form row" method="POST" action="{{ route('commande.store') }}">
    @csrf
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus required>
         <label class="label" for="name">votre nom</label>
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
        @enderror
      </div>

      <div class="form-field col-lg-6">
        <input id="name" class="input-text js-input"  type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus required>
        <label class="label" for="telephone">votre téléphone</label>
        @error('telephone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
     </div>
     <div class="form-field col-lg-6">
        <input id="name" class="input-text js-input"  type="text" class="form-control @error('product') is-invalid @enderror" name="product" value="{{ old('product') }}" required autocomplete="product" autofocus required>
        <label class="label" for="product">nom produit</label>
        @error('product')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
     </div>
      
      
      
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input"  class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus type="text" required>
         <label class="label" for="adresse">votre adresse</label>
        @error('adresse')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-field col-lg-12">
         <button class="submit-btn" type="submit" value="Submit">Envoyer </button>
      </div>
      
   </form>
</section>

<div>
  @if(session()->has('success'))
  <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
  {{session()->get('success')}}
</div>
  @endif
  </div>
</div>
  
</body>
</html>
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
