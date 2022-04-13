<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $produits->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produits->name }}</h5>
                            <p class="card-text">{{ $produits->description }}</p>
                            <p class="card-text">{{ $produits->prix }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>