<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <title>Document</title>
    </head>
    <body>
       
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand logo-font" href="index.html" id="brand">
                Ibrahim
            </a>
            <!-- links toggle -->
            <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <!-- account toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                <span class="badge badge-light">2</span>
            </button>
            
            <div class="collapse navbar-collapse" id="links">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">truc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">truc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">truc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">truc</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="account">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                    <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                    </a></li>
                  
                </ul>
            </div>
        </div>
      
          @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
      </div>

    </nav>
           
        
          
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>





