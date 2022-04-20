
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href={{asset('css/bootstrap1.min.css')}} rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('/images/icon.png') }}" sizes="16x16" type="image/png">
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
      <div class="container-fluid">
        <a href="{{route('welcome')}}"><img src="{{ asset('/images/COVOITURAGE.PNG') }}" width="180" height="30">

        <a   title="My account" href="#" class="btn btn-outline-success" style="margin-left: 770px;">My account ({{Auth::user()->name}})  </a>
             
           <form method="POST" action="{{ route('logout') }}">
     @csrf
     
         <a  class="btn btn-outline-success" style="margin-right: 100px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                     this.closest('form').submit(); " role="button">

             {{ __('LogOut') }}
         </a>
    
 </form>

    </nav>
<main>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{Auth::user()->name}}, bienvenue sur votre tableau de bord !</h1>
        <p class="lead text-muted"> Ici,vous pouvez consulter la liste de vos publications ainsi que la liste de vos résrvations de covoiturage</p>
      
      </div>
    </div>
  </section>
   
 

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col" style="margin-left: 70px;">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:Mes publications" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#318CE7"/><text style="color: #ffffff; font-family: 'Raleway',sans-serif ;font-weight: 400; text-transform: uppercase;" x="50%" y="50%" fill="#eceeef" dy=".3em">Mes réservations</text></svg>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">voir</button>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left: 170px;">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Mes réservations" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#FF8C00"/><text style="color: #ffffff; font-family: 'Raleway',sans-serif ;font-weight: 400; text-transform: uppercase;" x="50%" y="50%" fill="#eceeef" dy=".3em">Mes publications</text></svg>

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">voir</button>
                 
                </div>
               
              </div>
            </div>
          </div>
        </div>
      

           
          </div>
        </div>
      
      </div>
    </div>
  </div>

</main>



    <script src={{asset('js/bootstrap1.bundle.min.js') }} integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>