@extends("Home.base")
{{--@section('title', 'progress details')--}}
@section('content')
 <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2> Liste d'Avis</h2>
                        <div class="bt-option">
                            <a href="/">Accueil</a>
                            <a href="#">Listes</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->
   

    <!-- Class Timetable Section Begin -->
    <section class="class-timetable-section class-details-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-details-timetable_title">
                       <button type="button" class="primary-btn  btn-normal mt-3"  data-toggle="modal" data-target="#exampleModal"> Nouvelle avis</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-100">
                    <div class="class-timetable details-timetable">
                        <table >
                            <thead>
                                <tr>
                                    
                                    <th >objet</th>
                                    <th  >type</th>
                                    <th  width="500px"  >detail</th>
                                
                                    <th  >Date</th>
                                    <th  >Actions</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($avis as $avi)
                                <tr id="avi_id_{{ $avi->users_id }}">
                                    <td class="class-time">{{ $avi->objet }}</td>
                                    <td class="dark-bg hover-dp ts-meta" >
                                        <h5>{{ $avi->type }} </h5>
                                        
                                    <td class="hover-dp ts-meta" >
                                        <h5>{{ $avi->detail }} </h5>
                                        
                                    </td>
                                         
                                      
        <td class="hover-dp ts-meta" >
                                        <h5>{{($avi->created_at)->format('d-m-Y') }}</h5>
                                        
                                    </td>
                                    <td class="hover-dp ts-meta" >
                                 <form action="{{route('destroyAvis', $avi->id) }}"  method="post">
                        @csrf
                        @method("DELETE")
                        <button  target="_blank"  type="submit" class="btn btn-outline-danger waves-effect"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                                       
                                    </td>
                                 
                                </tr>
                               @endforeach
		
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {!! $avis->links() !!}
                        </div>
                         
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle ligne Avis </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('storeAvis',$idd)}}">
            @csrf
            @method('POST')
        <div class="card-body"> 
            <div class="form-group">
            

               
            </div>
            <div class="form-group">
                <label for="objet">Objet</label>
                <input type="text" class="form-control" name="objet" id="objet" placeholder="Entrer l'objet"
                    value="{{ old('objet') }}">
            </div>
            <div class="form-group">
                <label for="detail">detail</label>
                <input type="text" class="form-control" name="detail" id="detail" placeholder="Entrer le detail"
                    value="{{ old('detail') }}">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Entrer la date"
                    value="{{ old('date') }}">
            </div>
             <div class="form-group">

                <label for="type">Type </label>
                  <select name="type" class="form-control"   >
                    <option value="Etablissement">Etablissement </option>
                    <option value="Direction provinciale">Direction provinciale</option>
                </select>
            </div>
           

               
           
        </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Fermé</button>
        <button type="submit" class="primary-btn  btn-normal rounded-pill ">enregistrer les modifications</button>
      </div>
      
    </form>
      </div>
     
    </div>
  </div>
</div>
    </section>

@endsection
