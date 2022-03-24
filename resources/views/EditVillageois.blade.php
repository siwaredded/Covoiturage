@extends ("layouts.master")

@section("contenu")


<div class="my-3.p-3.bg-body.rounded.shadow-sm" style="padding-left: 20px; padding-top:20px ;">
    <h3 class="border-bottom.pb-2.mb-4">Edition d'un nouvel villageois</h3>
    
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

<form style="width:65%;" method="post" action="{{route('villageois.update', ['villageois'=>$villageois->id])}}">
@csrf

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Nom</label>
    <input type="nom" class="form-control" required name="nom" value="{{$villageois->nom}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputlastname"  class="form-label">Prénom</label>
    <input type="name" class="form-control" required name="prenom" value="{{$villageois->prenom}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email" value="{{$villageois->email}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Telephone</label>
    <input type="number" class="form-control" required name="telephone" value="{{$villageois->telephone}}">



    <div class="mb-3">
    <label for="exampleInputEntre" class="form-label">Entreprise</label>
    <select class="form-control"  name="entreprise_id" value="{{$villageois->entreprise_libelle}}" >
        <option value=""></option>
        @foreach($entreprises as $entreprise)
        @if ($entreprise->id == $villageois->entreprise_id)
        <option value="{{$entreprise->id}}" selected>{{$entreprise->libelle}}</option>
        @else
        <option value="{{$entreprise->id}}" >{{$entreprise->libelle}}</option>
        @endif
        @endforeach
      </select>
    </div>
    
        <div>
     <button type="submit" class="btn btn-primary">Enregistrer</button>
     <a href="{{route('villageois')}}" class="btn btn-danger">Annuler</a>
      
    
</form>
</div>

</div>
    
@endsection