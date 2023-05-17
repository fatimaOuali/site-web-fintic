@extends('layouts.app')
@section('title', 'User Profile')
@section('content')

<div class="py-5" style="background-image: url(/img/profilemod.png)">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
            <h4>Modifier Profile</h4>
            <div class="underline mb-4"></div>
        </div>
        <div class="col-md-10">

        @if(session('message'))
        <p class="alert alert-success">{{session('message')}}</p>
        @endif

        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li class="text-danger">
                {{$error}}

            </li>
            @endforeach

        </ul>
        @endif
<div class="card shadow">
    <div class="card-header " style="background-color: rgb(213, 183, 242)">
        <h4>Modifier les informations personnelles</h4>
    </div>
<div class="card-body">
    <form action="{{ url('modifierprofile')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <div class="text-center">
                <img  src="{{ asset('/storage/'.$viewData["profile"]->image) }}"  width="160" height="150"  class="rounded-circle">
            </div> 
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input class="form-control" id="profile_image"  type="file" name="image">
              
              <img src="{{ asset('img/'.Auth::user()->image) }}" alt="">
            
            </div>
          </div>
        </div>
        <div class="col">
          &nbsp;
        </div>
      </div>

    <div class="row">
<div class="col-md-6">
        <div class="mb-3">
            <label for="">nom et prenom</label>
            <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control" />
        </div> 
</div>

<div class="col-md-6">
    <div class="mb-3">
        <label for="">email</label>
        <input type="text" readony  value="{{ Auth::user()->email }}" class="form-control" />
    </div> 
</div>

<div class="col-md-6">
    <div class="mb-3">
        <label for="">telephone</label>
        <input type="text" name="phone" value="{{ Auth::user()->phone  }}" class="form-control" />
    </div> 
</div>



<div class="col-md-6">
    <div class="mb-3">
        <label for="">address</label>
        <textarea type="text" name="address"  class="form-control"  rows="5" >{{ Auth::user()->address  }}</textarea>
           
    </div> 
</div>
<div class="col-md-12">
<button class="btn text-black" type="submit" style="background-color: rgb(213, 183, 242)">enregistrer</button>
<a href="{{route('profile.show')}}">
<button class="btn text-black" type="button" style="background-color: rgb(213, 183, 242)">profile</button>
</a>
</div>

    </div>
    </form>

</div>

</div>

        </div>
    </div>

    </div>

</div>
{{-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
<script>
    $document.ready(function() {
        $('#profile_image').change(function() {
            let reader = new FileReader();

            reader.onload = (e) => {
                $('#profile_image_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        })

    })
</script> --}}

@endsection

