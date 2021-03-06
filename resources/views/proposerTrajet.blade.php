
@extends("layouts.master")

@section('css')

@endsection

@section("contenu")
  <div class="container-fluid pt-5" style="background-color: white;padding-bottom: 150px">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
      <div class="row pt-4 pb-2 ps-4 pe-4" style="background: #008ECC;color: white;"><span style="width: auto;"><a href="/client" style="color: white;" data-toggle="tooltip" data-placement="top" title="Retour au tableau de bord"><i class="fa fa-backward"></i></a></span><span style="width: auto;" class="mx-auto text h3">PUBLIER UNE ANNONCE</span></div>


      <div class="row offset-1 p-5 ">

        <div class="col-lg-10 col-sm-12" style="padding-right: 40px;padding-left: 40px;">
          <div class="panel-body">

            <form action="{{route('trajets.proposer')}}" method="put" >
              {{csrf_field()}}
              <!-- Form 1 -->
              <div id="sf1" class="frm shadow p-4 rounded">
                <div class="row ">
                  <h4>Publiez votre trajet</h4>
                </div>
<br>
                  @if (session()->has(("success")))

<div class="alert alert-success">
<h3>{{session()->get('success')}}</h3>
</div>
@endif

@if ($errors ->any())
<ul class="alert laert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
     @endforeach
</ul>
@endif

<form style="width:65%;" method="put" action="{{route('villageois.ajouter')}}">
@csrf

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Adresse de départ</label>
    <input type="nom" class="form-control" required name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputlastname"  class="form-label">Adresse d'arrivée</label>
    <input type="name" class="form-control" required name="prenom" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Date de départ</label>
    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Heure de départ</label>
    <input type="Time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Nombre de places disponibles</label>
    <input type="number" class="form-control" required name="telephone" >



    <div class="mb-3">
    <label for="exampleInputEntre" class="form-label">Voulez-vous ajouter des informations sur votre trajets?</label>
    <input class="form-control" name="entreprise_id" >
      </div>

      <div>
     <button type="submit" class="btn btn-primary">Enregistrer</button>
     <button href="{route('welcome')}}" class="btn btn-danger">Annuler</button>
    </div>
      
    
</form>
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

  @endsection

  @section('js')
  <script src="{{url('js/jquery.validate.js')}}"></script>
  @endsection