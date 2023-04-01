@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
<div class="card-header">
Achat terminé
</div>
<div class="card-body">
<div class="alert alert-success" role="alert">
    Félicitations, achat terminé. Le numéro de commande est <b>#{{ $viewData["order"]->getId() }}</b>
</div>
</div>
</div>
@endsection
