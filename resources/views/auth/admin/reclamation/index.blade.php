@extends('auth.admin.base')

@section('title', 'Liste des reclamations')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link {{ Request::get('tab') == 'accept' ? 'active' : '' }}" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Accepter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::get('tab') == 'refuser' ? 'active' : '' }}" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Refuser</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::get('tab') == 'en_cours' ? 'active' : '' }}" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">En cours</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show {{ Request::get('tab') == 'accept' ? 'active' : '' }}" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  <table class="table table-bordered">
                    <thead class="card-header text-white bg-dark">
                        <tr>
                            <th class="text-center" style="width: 100px;">reclamation</th>
                            <th class="text-center" style="width: 30px;">Date</th>
                            <th class="text-center" style="width: 200px;">Nom Complete</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            
                        @foreach ($reclamations as $reclamation)
                        <tr>
                            <td class="text-center">{{ $reclamation->id }}</td>
                            <td class="text-center">{{ $reclamation->created_at }}</td>
                            <td class="text-center">
                                {{ $reclamation->first_name }}  {{ $reclamation->last_name }}
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-row justify-content-center">
                                <div  class="mr-2">
                                <a href="{{ '/admin/reclamations/' . $reclamation->id }}" class="btn btn-primary btn-sm" >
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                </div>
                                
                                <div>
                                <form action="{{ route('reclamations.destroy', $reclamation->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
            
                    </tbody>
                </table>
                    {{-- pagination --}}
    {{ $reclamations->appends(['tab' => 'accept'])->links() }}
                </div>
                <div class="tab-pane fade show {{ Request::get('tab') == 'refuser' ? 'active' : '' }}" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <table class="table table-bordered">
                    <thead class="card-header text-white bg-dark">
                        <tr>
                            <th class="text-center" style="width: 100px;">reclamation</th>
                            <th class="text-center" style="width: 30px;">Date</th>
                            <th class="text-center" style="width: 200px;">Nom Complete</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            
                        @foreach ($reclamations1 as $reclamation)
                        <tr>
                            <td class="text-center">{{ $reclamation->id }}</td>
                            <td class="text-center">{{ $reclamation->created_at }}</td>
                            <td class="text-center">
                                {{ $reclamation->first_name }}  {{ $reclamation->last_name }}
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-row justify-content-center">
                                <div  class="mr-2">
                                <a href="{{ '/admin/reclamations/' . $reclamation->id }}" class="btn btn-primary btn-sm" >
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                </div>
                                
                                <div>
                                <form action="{{ route('reclamations.destroy', $reclamation->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
            
                    </tbody>
                </table>
                    {{-- pagination --}}
    {{ $reclamations1->appends(['tab' => 'refuser'])->links() }}                </div>
                <div class="tab-pane fade show {{ Request::get('tab') == 'en_cours' ? 'active' : '' }}" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <table class="table table-bordered">
                    <thead class="card-header text-white bg-dark">
                        <tr>
                            <th class="text-center" style="width: 100px;">reclamation</th>
                            <th class="text-center" style="width: 30px;">Date</th>
                            <th class="text-center" style="width: 200px;">Nom Complete</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
            
                        @foreach ($reclamations2 as $reclamation)
                        <tr>
                            <td class="text-center">{{ $reclamation->id }}</td>
                            <td class="text-center">{{ $reclamation->created_at }}</td>
                            <td class="text-center">
                                {{ $reclamation->first_name }}  {{ $reclamation->last_name }}
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-row justify-content-center">
                                <div  class="mr-2">
                                <a href="{{ '/admin/reclamations/' . $reclamation->id }}" class="btn btn-primary btn-sm" >
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                </div>
                                
                                <div>
                                <form action="{{ route('reclamations.destroy', $reclamation->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
            
                    </tbody>
                </table>
                    {{-- pagination --}}
    {{ $reclamations2->appends(['tab' => 'en_cours'])->links() }}                </div>
   
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
       
      </div>
   


</div>
@endsection
