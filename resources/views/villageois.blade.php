@extends ("layouts.master")


@section("contenu")

<main>

<div class="my-3.p-3.bg-body.rounded.shadow-sm ">
    <h3 class="border-bottom.pb-2.mb-4">Liste des villageois</h3>
    <div><a href="{{route('villageois.create')}}" class="btn btn-primary">Ajouter un nouvel villageois</a></div>   
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">telephone</th>
      <th scope="col">entreprise_id</th>
    </tr>
  </thead>
  <tbody>
      @foreach($villageois as $villageois)
    <tr>
      <th scope="row">{{ $loop->index + 1 }}</th>
      <td>{{ $villageois -> nom }}</td>
      <td>{{ $villageois ->prenom }}</td>
      <td>{{ $villageois -> email }}</td>
      <td>{{ $villageois -> telephone }}</td>
      <td>{{ $villageois -> entreprise_libelle }}</td>
      <td>
          <a href="#" class="btn btn-info">Editer</a>
          <a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    @endforeach
    
</main>

@endsection