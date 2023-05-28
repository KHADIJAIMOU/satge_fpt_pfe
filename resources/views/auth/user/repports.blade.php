@extends('auth.user.baseUser')
    @section('title', 'Liste des rapports')
@section('content')
<div class="container-fluid">
    <a href="{{ route('rapport.index') }}" class="btn btn-success mb-2">
        <i class="fa-solid fa-plus"></i>
        Ajouter Un Nouvel rapport
    </a>
@if (count($lists)==0)
<div> Aucun rapport pour le moment </div>
    
@endif

@if (count($lists)>=1)
<table class="table table-bordered">
    <thead class="card-header text-white bg-dark">
        <tr>
            <th class="text-center" style="width: 100px;">Type class</th>
            <th class="text-center" style="width: 100px;">Rapport d'activite </th>
            <th class="text-center" style="width: 220px;">rapport des visites</th>
            <th class="text-center" style="width: 40px;">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($lists as $repport)
        <tr>
            <td class="text-center">{{ $repport->typeClass }}</td>
            <td class="text-center">{{ $repport->rapportActiviteEffectuer }}</td>
            <td class="text-center">
                {{ $repport->rapportVisit }}
            </td>
            <td class="text-center">
                <div class="d-flex flex-row justify-content-center">
                <div  class="mr-2">
                <a href="{{ '/user/rapport/' . $repport->id }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-eye"></i>
                </a>
                </div>
                <div class="mr-2">
                <a href="{{ '/user/rapport/' . $repport->id . '/edit' }}" class="btn btn-secondary btn-sm">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                </div>
                <div>
                <form action="{{ route('rapport.destroy', $repport->id) }}" method="post">
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
{{ $lists->links() }}    
@endif

</div>
@endsection