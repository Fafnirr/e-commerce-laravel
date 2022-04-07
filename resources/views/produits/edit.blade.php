@extends('produits.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('produit/' .$produits->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$produits->id}}" id="id" />
        <label>Lien d'image</label><br>
        <input type="text" name="img" id="img" value="{{$produits->image}}" class="form-control"><br>
        <label>Nom</label><br>
        <input type="text" name="name" id="name" value="{{$produits->name}}" class="form-control"><br>
        <label>Description</label><br>
        <input type="text" name="Description" id="Description" value="{{$produits->description}}" class="form-control"><br>
        <label>Prix</label><br>
        <input type="text" name="prix" id="prix" value="{{$produits->prix}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>
 
@stop
