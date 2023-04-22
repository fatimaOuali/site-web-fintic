<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Admin - FINTIC')</title>
</head>

<body>
  <div class="row g-0">
    <!-- sidebar -->
    <div id="admin_space" class="p-3 col fixed text-white ">
      <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
        <span class="fs-4">Panneau d'administration</span>
      </a>
      <hr />
      <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">Accueil Administrateur</a></li>
        <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white"> Products</a></li>
        <li><a href="{{ route('admin.category.index') }}" class="nav-link text-white"> Categories</a></li>
        <li><a href="{{ route('admin.clients.index') }}" class="nav-link text-white">Gestion comptes</a></li>
        <li><a href="{{ route('admin.message.index') }}" class="nav-link text-white">Messages des clients</a></li>
        <li><a href="{{ route('admin.commande.index') }}" class="nav-link text-white">Gestion commande avec adressage</a></li> 
        <li><a href="{{ route('admin.orders.orders') }}" class="nav-link text-white">Gestion commandes</a></li> 



        <li>
         <a href="{{ route('home.about') }}" class="mt-2 btn bg-primary text-white"> <i id="icon_dc" class="fa-solid fa-circle-left"></i> Déconnexion</a>
        </li>
      </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
      <nav class="p-3 shadow text-end">
        <span class="profile-font">Admin</span>
        <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
      </nav>

      <div class="g-0 m-5">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
          {{-- href="https://twitter.com/danielgarax" --}}>
          Fintic
        </a> - <b></b>
      </small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <style>
    .fa-solid{
      size: 200px;
    }
  </style>
</body>

</html>
