@extends('Home.base')
{{-- @section('title', 'progress details') --}}
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>informations de profile</h2>
                        <div class="bt-option">
                            <a href="/">Accueil</a>
                            <span>Profile Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!--  Section Begin -->
    <section class="class-timetable-section class-details-timetable spad  pt-1">
        <div class="section-title contact-title text-center  ">

            <h2>Profil de {{ Auth::user()->NOM_ETABL }}</h2>
        </div>
        <div class="container">
            <div class="col-lg-10">
                <div class="leave-comment">
                    <form action="{{ route('profileUpdateVisiteur') }}" method="POST">
                        @csrf
                        <label class="text-white" for="name"><strong>Nom et Prénom :</strong></label>
                        <input type="text" class="form-control" id="name" name="NOM_ETABL" value="{{ Auth::user()->NOM_ETABL }}"
                            placeholder="Nom et Prénom">
                        <label class="text-white" for="email"><strong>Email:</strong></label>
                        <input type="text" class="form-control" id="email" value="{{ Auth::user()->CD_ETAB }}"
                            name="CD_ETAB" placeholder="Email">
                        <button type="submit">Mise à jour du profil</button>
                    </form>
                </div>
            </div>
        </div>

    </section>


    <!-- CALORIES Calculator Section End -->
@endsection
