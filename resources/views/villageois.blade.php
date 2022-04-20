@extends ("layouts.master")


@section("contenu")

<main>

<div class="my-3.p-3.bg-body.rounded.shadow-sm " style="padding-left: 20px; padding-top:20px ">
    <h3 class="border-bottom.pb-2.mb-4"></h3>
   

    @if (session()->has(("successDelete")))
   <div class="alert alert-success">
   <h3>{{session()->get('successDelete')}}</h3>
   </div>
   @endif 
    
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
      @foreach( $users as $user)
    <tr>
      <th scope="row">{{ $loop->index + 1 }}</th>
    
      <td>{{ $user->name }}</td>
      <td>{{ $user->prenom }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->telephone }}</td>
      <td>{{ $user->entreprise_id }}</td>
      <td>
        
          <a href="#" class="btn btn-danger" onclick=" if (confirm('Voulez-vous vraiment supprimer cet employé?')){document.getElementById('form-{{$user->id}}').submit()}">Supprimer</a>
          <form id="form-{{$user->id}}" action ="{{route('villageois.supprimer',['user'=>$user->id])}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
          </form>
      </td>
      <td>
        <button href="" class="btn btn-success" onclick=" if (confirm('Voulez-vous vraiment ajouter cet employé à la liste des administrateurs?')){document.getElementById('form-update-{{$user->id}}').submit()}">Make admin</a>
          <form id="form-update-{{$user->id}}" action ="{{route('make.admin',['user'=>$user->id])}}" method="post">
            @csrf
            @method('PUT')
          </form>
      </td>
    </tr>
    @endforeach
</div >
</main>

@endsection