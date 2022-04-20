@extends("layouts.master")
@section("contenu")
<style>
 .row{
     margin-top: 100px;
     margin-left: 450px;
     margin-right:20px;
 }
 .centered img {
  width: 150px;
  border-radius: 50%;
  margin-left: 250px;
  margin-top: 50px;
}   
h2{
    margin-top: 20px;
}
</style>
<div>
    <p style="text-align: center; margin-top:30px;">
    
    </p>
</div>
<div class="row">
    <div class="col-lg-4">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><img src="{{asset('/images/SIWAR.jpg')}}" alt="" style="border-radius: 50%; width:150px">
      </svg>

      <h2> Siwar Edded </h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><img src="{{asset('/images/YOSRA.jpg')}}" alt="" style="border-radius: 50%; width:150px">
      </svg>

      <h2>Yosra Oueslati</h2>
      <p></p>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><img src="{{asset('/images/SIWAR.jpg')}}" alt="" style="border-radius: 50%; width:150px">
      </svg>

      <h2> Rawia Ben Houla </h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><img src="{{asset('/images/YOSRA.jpg')}}" alt="" style="border-radius: 50%; width:150px">
      </svg>

      <h2>Sofien Ben Haddej</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    
</div>
@endsection