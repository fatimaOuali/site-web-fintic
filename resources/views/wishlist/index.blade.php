@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
@if(session('status'))
<script>
  smal('{{session('status')}}')
  </script>
  @endif
<div class="container my-5" id="all_whl">
    <div class="card shadow" id="card_whishis">
        <div class="card-body">
  @if($viewData["favoris"]->count()>0)
  @foreach($viewData["favoris"] as $item)
  <div class="row product_data">
    <div class="col-md-2 my-auto">
      @if ($item->products->productImage->count() > 0)
      {{-- <img class="imgPro" src="{{ $product->productImage->image }}" > --}}
        <img src="{{asset($item->products->productImage->image)}}" height="90px" width="90px" alt="">
    @endif
      </div>
<div class="col-md-2 my-auto" >
  <h6>{{$item->products->name}}</h6>
</div>
<div class="col-md-2 my-auto">
    <input type="hidden" class="product_id" value="{{$item->product_id}}">
    <h6>{{$item->products->price}}</h6>
  </div>
  <div class="col-md-2 my-auto">
    <button class="btn btn-danger remove_wishlist ">
        <i class="bi-trash"></i>
      </button>
  </div>
  </div>
  <br>
  @endforeach
  @else
  <h4> there are no product in your wishlist</h4>
  @endif
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>

  <script>
    $(document).ready(function() {
  $('.remove_wishlist').click(function(e) {
e.preventDefault();
var product_id = $(this).closest('.product_data').find('.product_id').val();
 



$.ajax({
  methode: "POST",
  url: "/delete_wishlist",
  data:{
    'product_id':product_id,
  },
  success:function(response){
    window.location.reload();
    swal("",response.status,"success");
  }
})
});
});
  </script>

  <style>
    #card_whishis{
      width: 105%;
    }
    #all_whl{
      font-size: 30px;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      
    }
  </style>
@endsection
