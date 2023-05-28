@extends('auth.admin.base')
@section('title', 'Détails ')
@section('content')
    <a href="/admin/reclamations" class="btn btn-secondary float-right">
        <i class="fa-solid fa-arrow-left"></i> précédent
    </a>
        <div class="card-body pt-5">
            {{-- IMAGES PART --}}
            @if (count($list_images))
                <div class="row">
                    <div class="col col-4"></div>
                    <div class="col col-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($list_images as $index => $image)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($list_images as $image)
                                @php
                                    $extension = pathinfo($image->path, PATHINFO_EXTENSION);
                                @endphp
                            
                                @if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif']))
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ asset($image->path) }}" class="d-block w-100" alt="...">
                                    </div>
                                @elseif (in_array($extension, ['pdf', 'xls', 'xlsx']))
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <embed src="{{ asset($image->path) }}" class="d-block w-100" style="height: 500px; width: 100%;">
                                    </div>
                                
                                @elseif (in_array($extension, ['mp4', 'webm', 'ogg']))
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <video controls class="d-block w-100">
                                            <source src="{{ asset($image->path) }}" type="video/{{ $extension }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @elseif (in_array($extension, ['mp3', 'wav', 'ogg']))
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div style="margin: 100px;">
                                            <audio controls class="d-block w-100">
                                                <source src="{{ asset($image->path) }}" type="audio/{{ $extension }}">
                                                Your browser does not support the audio tag.
                                            </audio>
                                        </div>
                                    </div>
                                @else
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <br><br><br><br> <center>                                        <a  href="{{ asset($image->path) }}" download>  Download File</a>
                                            <br><br><br><br><br><br><br></center>
                                    </div>
                                @endif
                            @endforeach
                            

        </div>
        <button class="carousel-control-prev" style="background-color:rgb(172, 161, 161)" type="button"
            data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" style="background-color:rgb(172, 161, 161)" type="button"
            data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        </div>
        </div>
        <div class="col col-4"></div>
        </div>
        @endif

        <div class="form-group">
            <label for="name">Nom Complete</label>
            <input type="text" class="form-control" name="name" id="name" 
                value="{{ $reclamation->first_name }}  {{ $reclamation->last_name }}" disabled>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" name="date" id="date" 
                value="{{ $reclamation->created_at }}" disabled>
        </div>
        <div class="form-group">
            <label for="short_description">N° de téléphone </label>
            <input type="text" class="form-control" name="date" id="date" 
            value="{{ $reclamation->phone }}" disabled>        </div>
        <div class="form-group">
            <label for="content">CNI</label>
            <textarea class="form-control" cols="30" rows="10" disabled>{{ $reclamation->CNI }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="description">ll_com</label>
            <input type="text" class="form-control" name="date" id="date" 
            value="{{ $reclamation->ll_com }}" disabled>      
                </div>
               
         <form method="post" action="{{ route('reclamations.update', $reclamation->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group">
                {{-- <button type="button" class="btn btn-outline-info btn-block btn-flat"- ><i class="fa-solid fa-check"></i> Aceepter</button>
        <button type="button" class="btn btn-outline-danger btn-block btn-flat"><i class="fa fa-times"></i> Refuser</button>
        <button type="button" class="btn btn-outline-warning btn-block btn-flat"><i class="fa fa-clock"></i> Encours</button>
        --}}
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-light">
                <input type="radio" name="status" id="status" value="1" autocomplete="off" {{ $reclamation->status == 1 ? 'checked' : '' }}> Accepter
            </label>
            <label class="btn btn-light ">
                <input type="radio" name="status" id="status" value="2" autocomplete="off" {{ $reclamation->status == 2 ? 'checked' : '' }}> Refuser
            </label>
            <label class="btn btn-light">
                <input type="radio" name="status" id="status" value="0" autocomplete="off" {{ $reclamation->status == 0 ? 'checked' : '' }}> En cours
            </label>
        </div>
        
            <br>
            
            <label for="response">Reponse</label>
            <textarea class="form-control" name="response" id="response" cols="30" rows="10" > {{$reclamation->response }}</textarea>
            {{-- <input type="number" name="status" id="status"> --}}
            <br>
            <button type="submit" class="btn btn-lg btn-success float-right">Valider
            </div>  
                </form>  
    </div>
@endsection
