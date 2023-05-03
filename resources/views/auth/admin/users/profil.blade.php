@extends('auth.admin.base')
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
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->NOM_ETABL}}</h3>

                <p class="text-muted text-center">Chef de service informatique</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Y</b> <a class="float-right">Y</a>
                  </li>
                  <li class="list-group-item">
                    <b>Y/b> <a class="float-right">Y</a>
                  </li>
                  <li class="list-group-item">
                    <b>Y</b> <a class="float-right">Y</a>
                  </li>
                </ul>

                <a href="/admin/repports" class="btn btn-primary btn-block"><b>Rapports</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
          
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>
    
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>
    
                  <hr>
    
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    
                  <p class="text-muted">Malibu, California</p>
    
                  <hr>
    
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    
                  <p class="text-muted">
                    <span class="tag tag-danger">UI Design</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary">Node.js</span>
                  </p>
    
                  <hr>
    
                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
    
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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
