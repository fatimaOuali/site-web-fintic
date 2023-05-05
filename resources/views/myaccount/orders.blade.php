@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

  <div id="thnk_ord" class="title mx-auto">
    merci pour votre commande!
     </div>
     @forelse ($viewData["orders"] as $order)
     <div class="body_pn">
      <section id="section_pn">
  <div >
      <h1 id="pan_h1">Mon commande </h1>
      {{-- {{ $order->getId() }} --}}
  <div class="tbl-header">
  <table id="table_pan" cellpadding="0" cellspacing="0" border="0">
  <thead>
      <tr id="tr_pn">
  <th id="th_pn" scope="col">product</th>
  <th id="th_pn" scope="col">Nom</th>
  <th id="th_pn" scope="col">Prix</th>
  <th id="th_pn" scope="col">Quantité</th>
  </tr>
  </thead>
  <tbody  cellpadding="0" cellspacing="0" border="0">
    @foreach ($order->getItems() as $item)
  <tr >
      <td id="td_pn">
        @if ($item->getProduct()->productImage->count() > 0)
        {{-- <img class="imgPro" src="{{ $product->productImage->image }}" > --}}
          <img src="{{asset($item->getProduct()->productImage->image)}}" height="90px" width="90px" alt="">
      @endif
      </td>
  <td id="td_pn"><a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
    {{ $item->getProduct()->getName() }}
    </a></td>
  <td id="td_pn">{{ $item->getPrice() }}DH</td>
  <td id="td_pn">{{ $item->getQuantity() }}</td>
  
  </tr>
  @endforeach
  </tbody>
  </table>
  <div class="row">
  <div class="text-end">
  <a class="btn btn-outline-secondary mb-2"><b>Le total :</b> DH{{ $order->getTotal() }}</a>
  <a class="btn btn-outline-secondary mb-2"><b>Date :</b> {{  $order->getCreatedAt()  }}</a>
{{-- <a class="btn btn-outline-secondary mb-2" href="{{ url('myaccount/orders/'.$order->id.'/delete')}}" class="d-block"> --}}
  {{-- <form action="{{ route('myaccount.orders.delete', $order->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-secondary mb-2" type="submit" class="btn btn-danger">Delete</button>
</form> --}}

  
  </div>
  </div>
  </div>
  </div>
      </section>
  </div>
  @empty
<div class="alert alert-danger" role="alert">
  Il semble que vous n'ayez rien acheté dans notre magasin =(.
</div>
@endforelse
  
  <script>
      $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
  }).resize();
  </script>
  <style>
      #pan_h1{
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 300;
    text-align: center;
    margin-bottom: 15px;
  }
  #table_pan{
    width:100%;
    table-layout: fixed;
  }
  .tbl-header{
    background-color: rgba(255,255,255,0.3);
   }
  .tbl-content{
    height:300px;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid rgba(255,255,255,0.3);
  }
  #th_pn{
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 28px;
    color: #fff;
    text-transform: uppercase;
  }
  #td_pn{
    padding: 15px;
    text-align: left;
    vertical-align:middle;
    font-weight: 300;
    font-size: 20px;
    color: #0c0707;
    border-bottom: solid 1px rgba(255,255,255,0.1);
  }
  
  
  /* demo styles */
  
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
  
  .body_pn{
    background: -webkit-linear-gradient(left, #b23ed3, #25b7c4);
    background: linear-gradient(to right, #b23ed3, #25b7c4);
    font-family: 'Roboto', sans-serif;
  }
  #section_pn{
    margin: 50px;
  }
  
  /* follow me template */
  .made-with-love {
    margin-top: 40px;
    padding: 10px;
    clear: left;
    text-align: center;
    font-size: 10px;
    font-family: arial;
    color: #fff;
  }
  .made-with-love #i_pn {
    font-style: normal;
    color: #F50057;
    font-size: 14px;
    position: relative;
    top: 2px;
  }
  .made-with-love #a_pn {
    color: #fff;
    text-decoration: none;
  }
  .made-with-love #a_pn:hover {
    text-decoration: underline;
  }
  
  </style>
 
{{-- @forelse ($viewData["orders"] as $order)
<div class="card mb-4">
<div class="card-header">
Order #{{ $order->getId() }}
</div>
<div class="card-body">
<b>Date:</b> {{ $order->getCreatedAt() }}<br />
<b>Total:</b> ${{ $order->getTotal() }}<br />
<table class="table table-bordered table-striped text-center mt-3">
<thead>
<tr>
<th scope="col">Item ID</th>
<th scope="col">Product Name</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>

</tr>
</thead>
<tbody>
@foreach ($order->getItems() as $item)
<tr>
<td>{{ $item->getId() }}</td>
<td>
<a class="link-success" href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
{{ $item->getProduct()->getName() }}
</a>
</td>
<td>${{ $item->getPrice() }}</td>
<td>{{ $item->getQuantity() }}</td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@empty
<div class="alert alert-danger" role="alert">
Seems to be that you have not purchased anything in our store =(.
</div>
@endforelse --}}
<style>
#thnk_ord{
  display: flex;
 
    /* text-align: center; */
    font-size: 50px;
    font-weight: bold;
    padding: 0%;
}

</style>
@endsection
