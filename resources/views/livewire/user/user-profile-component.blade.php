@extends ("layouts.master")


@section("contenu")

<main>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
             
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  @if($user->profile->image)
                        <img src="{asset('/images/profile')}}/{{$user->profile->image}}" width="150%"/>
                        @else
                        <img src="{asset('/images/profile/default.jpg')}}" width="100%"/>
                        @endif
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      
                      <p class="text-muted font-size-sm">{{$user->email}}</p>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Nom</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Prénom</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Email</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Téléphone</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->telephone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"><b>Ville</b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->ville}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-outline-success" target="__blank" href="{{route('edit.profile')}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              



            </div>
          </div>

        </div>
    </div>
</main>

@endsection