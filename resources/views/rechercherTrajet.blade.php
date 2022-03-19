
@extends("layouts.master")

@section("contenu")

<div class="container-fluid pt-5" style="background-color: white;padding-bottom: 150px">
    <div class="col-lg-10 mx-auto " style="background-color: #ecf0f5;">
    	<div class="row p-4" style="background: #008ECC;color: white;"><span style="width: auto;"><a href="/client" style="color: white;" data-toggle="tooltip" data-placement="top" title="Retour au tableau de bord"><i class="fa fa-backward"></i></a></span><span  style="width: auto; " class="mx-auto h3"  >RECHERCHER UN TRAJET</span></div>
    	     	
    	
        	<div class="row offset-1 p-5 "   > 
        	
                	<div class="col-lg-10 " >
            
                        <div  >
                        	<form action="/rechercher" method="post" id="searchform" name="searchform">
                        	{{csrf_field()}}
                        		<div class="row">
                        			<div class="col ">
                        				  <input list="ville_depart" name="ville_depart" id="ville_depart" class="form-control" placeholder="Adresse de départ" required="required">
                                          <datalist id="browsers">
                                            <option value="Edge">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                          </datalist>
                        			</div>
                        			
                        			<div class="col">
                        				  <input list="ville_arriver" name="ville_arrivee" id="ville_arriver" class="form-control" placeholder="Adresse d'arrivée" required="required">
                                          <datalist id="ville_arriver">
                                            <option value="Edge">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                          </datalist>
                        			</div>
                        			
                        			<div class="col">       			
                        			  <input type="date" name="date_depart" id="date_depart" class="form-control" required="required">
                                      
                        			</div>
                        			<div class="col ">
                        				      <button class="btn btn-outline-success" id="recherche" type="submit">Rechercher </button>                        				
                        			</div>
                        		
                        		</div>
                               
                        	</form> 
                    	</div>
            	
                    	@if(!empty($trajet) )
                    	@foreach($trajet as $trajetInfo)
                    		
                	    <div class="col shadow mt-5" >
                    		<div class="container-fluid" >
                    			<div class="container pt-2">
                    				<div class="row">
                    					<div><img alt="" src="{{url('/img/default-user.jpg')}}" width="100px" height="100px" class="rounded-circle"></div>
                    					<div class="h6">{{$trajetInfo->nom}} {{$trajetInfo->prenom}}</div>
                    					<div class="h6">{{$trajetInfo->numero_de_telephone}}</div>
                    				</div>
                    				
                    				<div class="row offset-2">
                    					<div class="col">
                    						<div class="h6">Depart :</div>
                    						<div class="h6">Arriver :</div>
                    						<div class="h6">Lieu depart :</div>
                    						<div class="h6">Lieu arriver :</div>
                    					</div>
                    					<div class="col-lg-2 " style="border-right: 2px #212529 solid;">
                    						<div class="h6">{{$trajetInfo->ville_depart}}</div>
                    						<div class="h6">{{$trajetInfo->ville_arriver}}</div>
                    						<div class="h6">{{$trajetInfo->lieux_depart}}</div>
                    						<div class="h6">{{$trajetInfo->lieu_arriver}}</div>
                    					</div>
                    					
                    					<div class="col-lg-4 ms-4 pr-4">
                    						<div class="h6">Date depart :</div>
                    						<div class="h6">Heure depart :</div>
                    						<div class="h6">Place dispos :</div>
                    						<div class="h6">Prix trajet :</div>
                    					</div>
                    					<div class="col">
                    						<div class="h6">{{$trajetInfo->date_depart}}</div>
                    						<div class="h6">{{$trajetInfo->heure_depart}}</div>
                    						<div class="h6">{{$trajetInfo->nbre_places}}</div>
                    						<div class="h6">{{$trajetInfo->prix_voyages}}</div>
                    					</div>
                    				</div>
                    				
                    				<div class="row pt-4 pb-4">
                    					<div><a class="btn btn-info float-right" href="{{url('ajoutPanier/'.$trajetInfo->trajet_id)}}">Voir detail du trajet</a></div>
                    				
                    				</div>
                    			
                    			</div>
                    			
                    		</div>
                	    </div> 
                	   
                		@endforeach
                		
                		@else
                 		  <div class="row pt-5 pl-5"><span style="color: black;">Rechercher pour voir les covoiturages disponibles</span></div>
                 		
                 		@endif
         		
            	</div>
        	</div>    	
    </div>
</div>
 <!-- FOOTER -->
 <div class="b-example-divider"></div>

  
    
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  <div class="col d-flex align-items-start">
	<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
	  <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
	</div>
	<div >
	  <h2>A propos</h2>
	  <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
	  <a href="#" class="btn btn-primary">
		Primary button
	  </a>
	</div>
  </div>
  <div class="col d-flex align-items-start">
	<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
	  <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
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
	  <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
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
<style>
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}
.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}
</style>

<script src="{{url('js/jquery.validate.js')}}"></script>
@endsection