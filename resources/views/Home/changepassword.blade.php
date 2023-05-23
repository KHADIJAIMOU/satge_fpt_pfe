@extends("Home.base")
{{--@section('title', 'progress details')--}}
@section('content')


    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb-text">
                      <h2> changer le mot de passe</h2>
                      <div class="bt-option">
                          <a href="/">Accueil</a>
                          <span> changer le mot de passe</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Section Begin -->
  <section class="class-timetable-section class-details-timetable spad pt-1">
    <div class="section-title contact-title text-center ">
     
        <h2 class="mt-45">Changement de mot de passe de{{Auth::user()->name}}</h2>
    </div>
    <div class="container">
    <div class="col-lg-10">
        <div class="leave-comment">
            <form action="{{route('changePasswordUpdate')}}" method="POST">
                @csrf
                <label class="text-white" for="current_password"><strong>Mot de passe actuel:</strong></label>
                <input type="text" class="form-control" id ="current_password" name="current_password">
                <label  class="text-white"for="email"><strong>Nouveau mot de passe:</strong></label>
                <input  type="text" class="form-control" id ="new_password" name="new_password"> 
                <label  class="text-white"for="email"><strong>Confirmer le nouveau mot de passe:</strong></label>
                <input type="text" class="form-control" id ="new_password_confirmation" name="new_password_confirmation">
                <button type="submit">Générer un nouveau mot de passe</button>
            </form>
        </div>
</div>
</div>

</section>
 
        
  <!-- CALORIES Calculator Section End -->
  
@endsection
