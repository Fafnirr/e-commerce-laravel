<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @include('layouts.header');
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" class="d-block w-100 d-block h-900" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="https://www.cowcotland.com/images/news/2021/12/concoursnoel-topachat-17.jpg" class="d-block w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="https://www.cowcotland.com/images/news/2021/04/concours-22ans-topachat.jpg" class="d-block w-100 " alt="..."> --> 
      </div>
    </div>
  </div>
  <div class="row">
    @foreach ($produits as $produit)
      <div class="card" style="width: 18rem;">
        <img src="{{ $produit->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $produit->name }}</h5>
          <p class="card-text">{{ $produit->description }}</p>
          <p class="card-text">{{ $produit->prix }} €</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>