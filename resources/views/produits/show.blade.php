@extends('produits.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

 
        <div class="card-body">
        <h5 class="card-title">image : {{ $produits->image }}</h5>
        <h5 class="card-title">Nom : {{ $produits->name }}</h5>
        <p class="card-text">Description : {{ $produits->description}}</p>
        <p class="card-text">Prix : {{ $produits->prix }}</p>
  </div>

    <hr/>

  </div>
</div>