<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Covoiturage</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,500"
      rel="stylesheet"
    />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Bootstrap core CSS 
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Favicons -->

  <link rel="icon" href="{{ asset('/images/icon.png') }}" sizes="16x16" type="image/png">
 
  <link rel="icon" href="{{ asset('/images/icon.jpg') }}" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">

  <style>
    .input-icons i {
      position: absolute;
    }

    .input-icons {
      width: 100%;
      margin-bottom: 10px;
      margin-left: 100px;
      display: flex;
    }

    .icon {
      padding: 10px;
      color: #1f3a50;
      min-width: 10px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;

    }
     /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

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


  <!-- Custom styles for this template -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  @yield('css')
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
      <div class="container-fluid">
        <a href="{{route('welcome')}}"><img src="{{ asset('/images/COVOITURAGE.PNG') }}" width="180" height="30">


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #1f3a50;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('trajets.rechercher')}}" style="color: #1f3a50; margin-left:30px;font-size: 15px;">Chercher un covoiturage</a>
                <!-- <a class="nav-link active" aria-current="page" href="{{route('trajets.rechercher')}}" style="color: #1f3a50; margin-left:30px;font-size: 15px;">Chercher un covoiturage</a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('trajets.proposer')}}" style="color: #1f3a50;margin-left:30px;font-size: 15px;">Publier un covoiturage</a>
              </li>



          </div>
  
         
            </ul>


         
            <a  class="nav-link" title="My account" href="#" style="background-color: #888; color:#1f3a50; border-radius:40px; margin-right:20px" >My account ({{Auth::user()->name}}) :  </a>
             
                <a  title="Dashboard" href="{{route('user.dashboard')}}" class="btn btn-outline-success" style="margin-right: 20px;" >Dashboard</a>
           
              <form method="POST" action="{{ route('logout') }}">
        @csrf
        
            <a  class="btn btn-outline-success" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">

                {{ __('LogOut') }}
            </a>
       
    </form>


        
         
    </nav>
  </header>


  <main>
    @yield("contenu")
  </main>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2kfyM192lUvXtPcgo1Op9rIWHVhO4hGk&libraries=places"></script>
<script>
var searchInput = 'search_input';
 
$(document).ready(function () {
 var autocomplete;
 autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
  types: ['geocode'],
  componentRestrictions: {
   country: "TUN"
  }
 });
  
 google.maps.event.addListener(autocomplete, 'place_changed', function () {
  var near_place = autocomplete.getPlace();
 });
});
</script>
<script>
var searchInput1 = 'search_input1';
 
$(document).ready(function () {
 var autocomplete1;
 autocomplete1 = new google.maps.places.Autocomplete((document.getElementById(searchInput1)), {
  types: ['geocode'],
  componentRestrictions: {
   country: "TUN"
  }
 });
  
 google.maps.event.addListener(autocomplete, 'place_changed1', function () {
  var near_place1 = autocomplete1.getPlace();
 });
});
</script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
    @yield('js')
</body>
</html>