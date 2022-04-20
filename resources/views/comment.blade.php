@extends("layouts.master")
@section("contenu")
<style>

    /* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 100;
  overflow-x: hidden;
  padding-top: 20px;
}
h2{
    text-align: center;
    margin-top:20px;
}
/* Control the left side */
.left {
  left: 0;
  background-color:whitesmoke;
}

/* Control the right side */
.right {
  right: 0;
  background-color: white;
}

/* If you want the content centered horizontally and vertically */


/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
  margin-left: 250px;
  margin-top: 50px;
}
</style>
<H1 style="text-align: center; margin: top 30px;">Comment ça marche</H1>
<p style="text-align: center; margin-top:30px; font-weight:200;"> Avec notre site web de covoiturage  “Startup Covoiturage” ,les employés n'ont qu'à indiquer leur adresse 
de domicile et leur date de départ pour que la plateforme recherche les covoitureurs disponibles sur leur trajet. </p>

<div class="split left">
  <div class="centered">
    <img src="{{asset('/images/conducteur-de-taxi.png')}}" alt="conducteur">
    <h2>Vous êtes conducteur ?</h2>
    <h3 style="width:400px ;background-color: #1f3a50; color:white;  border-radius:25px; margin-top:50px; margin-left:20px ;text-align:center;font-weight:100;"><i class="fa fa-upload"></i> Publiez un covoiturage </h3>
   <h4 style="margin-left: 30px; margin-top:30px;font-weight:300; color:black" >Indiquez la date et l'horaire de votre trajet et l'itinéraire</h4> 

</div>
</div>

<div class="split right">
  <div class="centered">
    <img src="{{asset('/images/passager.png')}}" alt="Avatar man">
    <h2>Vous êtes passager ?</h2>
    <h3 style="width:400px ;background-color: #1f3a50; color:white;  border-radius:25px; margin-top:50px; margin-left:20px ;text-align:center;"><i class="fa fa-search"></i>Rechercher un covoiturage </h3>
    <h4 style="margin-left: 40px; margin-top:30px; font-weight:300; color:black" > Entrez vos villes de départ et de destination, ainsi que votre date de voyage et choisissez parmi les conducteurs proposant des trajets qui vous conviennent.</h4> 

  </div>
</div>

@endsection