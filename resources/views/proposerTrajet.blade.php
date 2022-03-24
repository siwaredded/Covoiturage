<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Covoiturage</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Favicons -->

  <link rel="icon" href="/images/icon.png" sizes="16x16" type="image/png">

  <link rel="icon" href="/images/icon.jpg" sizes="16x16" type="image/png">

  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
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
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
      <div class="container-fluid">
        <a href="{{route('welcome')}}"><img src="{{ asset('images/COVOITURAGE.PNG') }}" width="180" height="30">



          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #1f3a50;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('trajets.rechercher')}}" style="color: #1f3a50; margin-left:100px;font-size: 15px;">Chercher un covoiturage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('trajets.proposer')}}" style="color: #1f3a50;margin-left:300px;font-size: 15px;">Publier un covoiturage</a>
              </li>

            </ul>


          </div>
      </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid pt-5" style="background-color: white;padding-bottom: 150px">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
      <div class="row pt-4 pb-2 ps-4 pe-4" style="background: #008ECC;color: white;"><span style="width: auto;"><a href="/client" style="color: white;" data-toggle="tooltip" data-placement="top" title="Retour au tableau de bord"><i class="fa fa-backward"></i></a></span><span style="width: auto;" class="mx-auto text h3">PUBLIER UNE ANNONCE</span></div>


      <div class="row offset-1 p-5 ">

        <div class="col-lg-10 col-sm-12" style="padding-right: 40px;padding-left: 40px;">
          <div class="panel-body">

            <form action="/proposer" method="post" id="basicform" name="basicform">
              {{csrf_field()}}
              <!-- Form 1 -->
              <div id="sf1" class="frm shadow p-4 rounded">
                <div class="row ">
                  <h4>Publiez votre trajet</h4>
                </div>
                <div class="row">
                  <!-- row 1 -->
                  <div class="col">
                    <class="text">Adresse de départ
                  </div>
                  <div class="col">
                    <input list="VilleDepart" name="ville_depart" id="ville_depart" class="form-control" placeholder="Entrez votre adresse de départ" required>

                  </div>
                </div>

                <p class="errorTxt" style="color: red;">
                  @if( $errors->has('trj_depart') )
                  {{$errors->first('trj_depart') }}
                  @endif
                </p>

                <div class="row">
                  <!-- row 3 -->
                  <div class="col"> Adresse d'arrivée</div>
                  <div class="col">
                    <input list="VilleArriver" name="ville_arriver" id="ville_arriver" class="form-control" placeholder="Entrez votre adresse d'arrivéé">

                  </div>
                </div>
                <p>
                  @if( $errors->has('trj_destination') )
                  {{$errors->first('trj_destination') }}
                  @endif
                </p>

                <div class="row">
                  <!-- row 4 -->
                  <div class="col">Date de depart</div>
                  <div class="col">
                    <input name="date_depart" type="date" id="date_depart" class="form-control" placeholder="Selectionner la date de depart">
                  </div>
                </div>
                <p>
                  @if( $errors->has('trj_date') )
                  {{$errors->first('trj_date') }}
                  @endif
                </p>
                <div class="row">
                  <div class="col">Heure de depart</div>
                  <div class="col">
                    <input name="heure_depart" type="time" id="heure_depart" class="form-control" placeholder="Selectionner heure de depart">
                  </div>
                </div>
                <p>
                  @if( $errors->has('trj_heure') )
                  {{$errors->first('trj_heure') }}
                  @endif
                </p>
                <!-- <div class="row">
                                      <div class="col-lg-2 ms-auto col-lg-offset-2">
                                          <button class="btn btn-primary open1" type="button">Suivant <span ></span></button> 
                                       </div>
                                 </div>
                                     -->

                <!-- fin form 1 -->

                <!-- debut form 2 -->
                <!-- row 1 -->


                <div class="row">
                  <!-- row 2 -->
                  <div class="col">Nombre de place disponible</div>
                  <div class="col">
                    <div class="input-group">
                      <input type="number" min="0" max="20" id="nbre_places" name="nbre_places" placeholder="Nombre de place disponible" class="form-control" aria-label="FCFA">


                    </div>
                  </div>
                </div>
                <p>
                  @if( $errors->has('trj_nbre_places') )
                  {{$errors->first('trj_nbre_places') }}
                  @endif
                </p>
                <div class="row">
                  <div class="col"> Voulez-vous ajouter des informations sur votre trajets?</div>
                  <div class="col">
                    <div class="input-group">
                      <input type="text" id="trj_info" name="trj_info" placeholder="informations sur votre trajet" class="form-control">
                    </div>
                  </div>

                </div>
                <p>
                  @if( $errors->has('trj_info') )
                  {{$errors->first('trj_info') }}
                  @endif
                </p>

                <div class="row">
                  <div class="d-flex col-lg-offset-2">
                    <a href="{{route('welcome')}}" class="btn btn-danger ">Retour</a>
                    <button class="btn btn-primary open3 ms-auto" type="submit">valider</button>
                  </div>
                </div>
              </div>
          </div>
          <!-- fin  -->
          </form>

        </div>

      </div>

    </div>
  </div>
  </div>
  <style>
    .col {
      font-family: sans-serif;

      font-weight: 400;
    }
  </style>
  <!-- FOOTER -->
  <div class="b-example-divider"></div>



  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="col d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#toggles2" />
        </svg>
      </div>
      <div>
        <h2>A propos</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#cpu-fill" />
        </svg>
      </div>
      <div>
        <h2>Plus d'infos</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#tools" />
        </svg>
      </div>
      <div>
        <h2>Nous suivre</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="btn btn-primary">
          Primary button
        </a>
      </div>
    </div>
  </div>
  </div>
  </footer>

  <script src="{{url('js/jquery.validate.js')}}"></script>