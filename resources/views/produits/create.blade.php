@extends('produits.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('produit') }}" method="post">
        {!! csrf_field() !!}
        <label>Lien d'image</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Nom</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Prix</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
 
@stop