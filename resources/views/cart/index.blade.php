@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="body_pn">
    <section id="section_pn">
<div >
    <h1 id="pan_h1">Mon panier</h1>
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
@foreach ($viewData["products"] as $product)
<tr >
    <td id="td_pn">
      @if ($product->productImage->count() > 0)
      <img  src="{{ $product->productImage->image }}" height="100px" width="100px">
  @endif
    </td>
<td id="td_pn">{{ $product->getName() }}</td>
<td id="td_pn">{{ $product->getPrice() }}DH</td>
<td id="td_pn">{{ session('products')[$product->getId()] }}</td>
{{-- <td id="td_pn">{{ $product->getPrice() }}DH</td> --}}

</tr>
@endforeach
</tbody>
</table>
<div class="row">
<div class="text-end">
<a class="btn btn-outline-secondary mb-2"><b>Le total à payer:</b> DH{{ $viewData["total"] }}</a>
@if (count($viewData["products"]) > 0)
<a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Achat</a>
<a href="{{ route('cart.delete') }}">
<button class="btn btn-danger mb-2">
    Supprimer tous les produits du panier
</button>
</a>
@endif
</div>
</div>
</div>
</div>
    </section>
</div>

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
@endsection
