@extends('auth.user.baseUser')

@section('title', "Edit profil")
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/img/etab.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->NOM_ETABL}}</h3>

                <p class="text-muted text-center">Directeur d'établissement scolaire</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Y</b> <a class="float-right">Y</a>
                  </li>
                  <li class="list-group-item">
                    <b>Y</b> <a class="float-right">Y</a>
                  </li>
                  <li class="list-group-item">
                    <b>Y</b> <a class="float-right">Y</a>
                  </li>
                </ul>

                <a href="/user/repports" class="btn btn-primary btn-block"><b>Rapports</b></a>
              </div>
              <!-- Edit Profile

E-Mail Address
Password
Confirm Password
 -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
          
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Modifier</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fa-sharp fa-solid fa-user"></i> CD_ETAB</strong>
    
                  <p class="text-muted">
                   <input type="text" disabled value="{{$user->CD_ETAB}}">
                  </p>
    
                  <hr>
    
                  <strong><i class="fa-solid fa-lock"></i> Mot de passe </strong>
    
                  <p class="text-muted">
                    <input type="text" value="{{$user->password}}">
                  </p>
    
                  <hr>
    
                  <strong><i class="fa-solid fa-circle-check"></i> Confirmer mot de passe </strong>
    
                  <p class="text-muted">
                    <input type="text">
                  </p>
    
                  <hr>
    
                  <strong><i class="fa-solid fa-image"></i> Image</strong>
    <center>
                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                      
                      <div class="card-body pt-0">
                        <div class="row">
                          
                          <div class="col-12 text-center">
                            <img src="/img/etab.jpg" alt="user-avatar" class="img-circle img-fluid">
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </center>  
                  <center>
                    <button type="button" class="btn btn-info btn-block btn-flat"><i class="fa-solid fa-upload"></i> Importer</button>
<br>
<br>
                  <a href="/user/profil" class="btn btn-app">
                    <i class="fas fa-xmark"></i>Anuuler
                  </a>
                  <a class="btn btn-app">
                    <i class="fas fa-save"></i> Enregistrer
                  </a>
                </center>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
