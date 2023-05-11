@extends('auth.admin.base')
@section('title', 'Liste des evenement')

@section('content')
<div class="container-fluid">

    <a href="{{ route('events.create') }}" class="btn btn-success mb-2">
        <i class="fa-solid fa-plus"></i>
        Ajouter Un Nouvel Event.
    </a>

    <table class="table table-bordered">
        <thead class="card-header text-white bg-dark">
            <tr>
                <th class="text-center" style="width: 100px;">Event</th>
                <th class="text-center" style="width: 30px;">Date</th>
                <th class="text-center" style="width: 200px;">Petite Description</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($events as $event)
            <tr>
                <td class="text-center">{{ $event->name }}</td>
                <td class="text-center">{{ $event->date }}</td>
                <td class="text-center">
                    {{ $event->short_description }}
                </td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                    <div  class="mr-2">
                    <a href="{{ '/admin/events/' . $event->id }}" class="btn btn-primary btn-sm" >
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    </div>
                    <div  class="mr-2">
                    <a href="{{ '/admin/events/' . $event->id . '/edit' }}" class="btn btn-secondary btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    </div>
                    <div>
                    <form action="{{ route('events.destroy', $event->id) }}" method="post">
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
    {{ $events->links() }}
</div>
@endsection