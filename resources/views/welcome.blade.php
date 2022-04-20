@extends("layouts.master")

@section("contenu")
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color:red;"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:red;"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" /><img src="{{asset('/images/banner1.jpg')}}" style="height: 700px;; width: 900px;">
      </svg>

      <div class="container">

        <div class="carousel-caption text-start">

          <p>


          <h1 style=" margin-left:350px ; text-align:center ; border-radius: 25px; width: 400px; height: 100px; color:white;   font-size:200%	;font-weight: bold; margin-bottom:250px" ;>Trouver un covoiturage</h1>

          <form action="/rechercher" method="post" id="searchform" name="searchform">
            {{csrf_field()}}
            <div class="row">
              <div class="col ">
                <input name="ville_depart" class="form-control" id="search_input" placeholder="Adresse de départ" style="border-radius:40px; margin-left:100px; " required>

              </div>

              <div class="col">
                <input name="ville_arrivee" class="form-control" id="search_input1" placeholder="Adresse d'arrivée" style=" border-radius:40px; margin-left:100px;" required>

              </div>

              <div class="col">
                <input type="date" name="date_depart" id="date_depart" style=" border-radius:40px; margin-left:100px;" placeholder="MM/DD/YYYY" required>

              </div>
              <div class="col ">
                <button class="btn btn-outline-success" id="recherche" type="submit" style=" margin-left:100px; ">Rechercher </button>
              </div>

            </div>

          </form>
        </div>




      </div>
    </div>

    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777" /><img src="{{asset('/images/banner.png')}}" style="height: 550px;; width: 500px;" alt="">
      </svg>

      <div class="container">
        
        <div class="carousel-caption text-end">
          <h1></h1>
          <p></p>
          
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class=" marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" style="margin-left: 165px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
      </svg>

      <h2> Conducteur 1</h2>
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" style="margin-left: 165px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
      </svg>

      <h2>Conducteur 2</h2>
      <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" style="margin-left: 165px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
      </svg>

      <h2>Conducteur 3</h2>
      <p>And lastly this, the third column of representative placeholder content.</p>
      <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->




  <!-- FOOTER -->
  <div class="b-example-divider"></div>
<footer>
<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Contactez-nous</h5>
<!--headin5_amrc-->

<p><i class="fa fa-location-arrow"></i> telegram </p>
<p><i class="fa fa-phone"></i>  +216 93 197 933 </p>
<p><i class="fa fa fa-envelope"></i> covoiturage@gmail.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col"  >
<h5 class="headin5_amrc col_white_amrc pt2" style="margin-left:50px">A propos</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc" style="margin-left:50px">
<li><a href="{{route('comment')}}">Comment ça marche</a></li>
<li><a href="{{route('QuiSommesNous')}}">Qui sommes-nous ?</a></li>
<li><a href="">Donnez votre feedback</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2" style="margin-left:50px"> Nous suivre</h5>
<!--headin5_amrc-->
<p>
<ul class="social_footer_ul" >
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>

<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
</p>
<!--footer_ul_amrc ends here-->
</div>



</div>
</div>



</footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  @endsection