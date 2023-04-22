@extends('layouts.app')
@section('title', 'User Profile')
@section('content')

<div class="py-5">
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
    <div class="card-header bg-primary">
        <h4>User Details</h4>
    </div>
<div class="card-body">
    <form action="{{ url('modifierprofile')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
        <div class="mb-3 row">
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <input class="form-control" id="profile_image" type="file" name="image">
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
            <label for="">Username</label>
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
        <label for="">phone number</label>
        <input type="text" name="phone" value="{{ Auth::user()->userDtail->phone ?? '' }}" class="form-control" />
    </div> 
</div>

<div class="col-md-6">
    <div class="mb-3">
        <label for="">Zip/pin code</label>
        <input type="text" name="pin_code" value="{{ Auth::user()->userDtail->pin_code ?? '' }}" class="form-control" />
    </div> 
</div>

<div class="col-md-6">
    <div class="mb-3">
        <label for="">address</label>
        <textarea type="text" name="address"  class="form-control"  rows="5" >{{ Auth::user()->userDtail->address ?? '' }}</textarea>
           
    </div> 
</div>
<div class="col-md-12">
<button class="btn bg-primary text-white" type="submit">save data</button>
<a href="{{route('profile.show')}}">
<button class="btn bg-primary text-white" type="button">profile</button>
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

