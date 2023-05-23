@extends('auth.admin.base')
@section('title', 'Liste des rapports')
@section('content')
    <div class="container-fluid">

        @if (count($repports) == 0)
            <div> Aucun rapport pour le moment </div>
        @endif

        @if (count($repports) >= 1)
           
            <section class="content">
                <div class="container-fluid">
                    <form action="enhanced-results.html">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                
                                
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="search" class="form-control form-control-lg" placeholder="Tapez le mot" value="el massir">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </section>
            <br>
            <br>
            <table class="table table-bordered">
                <thead class="card-header text-white bg-dark">
                    <tr>
                        <th class="text-center" style="width: 20%;">Type class</th>
                        <th class="text-center" style="width: 20%;">Date Etab </th>
                        <th class="text-center" style="width: 20%;">Date Create</th>
                        <th class="text-center" style="width:20%;">totale des absences</th>
                        <th class="text-center" style="width:20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($repports as $repport)
                        <tr>
                            <td class="text-center">{{ $repport->typeClass }}</td>
                            <td class="text-center">{{ $repport->date }}</td>
                            <td class="text-center">
                                {{ $repport->created_at }}
                            </td>
                            <td class="text-center" >
                                {{  $repport->total_absences}}
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-row justify-content-center">

                                    <div class="mr-2">
                                        <a href="{{ '/admin/repports/' . $repport->id }}" class="btn btn-primary btn-sm">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="mr-2">
                                        <a href="{{ '/admin/repports/' . $repport->id . '/edit' }}"
                                            class="btn btn-secondary btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                    <div class="mr-2">
                                        <a href="{{ '/conversations/' . $repport->id . '/' }}" target="_blank"
                                            class="btn btn-success btn-sm">
                                            <i class="fa-solid fa-message"></i> </a>
                                    </div>
                                    <div class="mr-2">
                                        <a href="{{ '/admin/repports/' . $repport->id . '/print' }}" target="_blank"
                                            class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-print"></i> </a>
                                    </div>
                                    <div class="mr-2">
                                        <a href="{{ '/admin/repports/' . $repport->id . '/telecharger' }}" target="_blank"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-download"></i> </a>
                                    </div>

                                    <div>
                                        <form action="{{ route('repports.destroy', $repport->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{-- pagination --}}
            {{ $repports->links() }}
        @endif

    </div>
@endsection
