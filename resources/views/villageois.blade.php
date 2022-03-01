<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrudVillageois</title>
</head>
<body>
    <h3>Liste des villageois</h3>
    <div>

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
      <td>{{ $villageois -> entreprise_id }}</td>
      <td>
          <a href="#" class="btn btn-info">Editer</a>
          <a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    
</body>
</html>