@extends ("layouts.master")

@section("contenu")


<div class="my-3.p-3.bg-body.rounded.shadow-sm">
    <h3 class="border-bottom.pb-2.mb-4">Ajout d'un nouvel villageois</h3>

<div class="mt-4">

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

<form style="width:65%;" method="post" action="{{route('villageois.ajouter')}}">
@csrf

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Nom</label>
    <input type="nom" class="form-control" required name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputlastname"  class="form-label">Prénom</label>
    <input type="password" class="form-control" required name="prenom" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Telephone</label>
    <input type="nom" class="form-control" required name="telephone" >



    <div class="mb-3">
    <label for="exampleInputEntre" class="form-label">Entreprise</label>
    <select class="form-control" required name="entreprise_libelle" >
        <option value=""></option>
        @foreach($entreprises as $entreprise)
        <option value="{{$entreprise->id}}">{{$entreprise->libelle}}</option>
        @endforeach
    
        <div>
     <button type="submit" class="btn btn-primary">Enregistrer</button>
     <a href="{route('villageois')}}" class="btn btn-danger">Annuler</button>
    </div>
      
    
</form>
</div>

</div>
    
@endsection