@extends("auth.admin.base")
@section('title', 'Modifier l\'evenement')
@section('content')
<a href="/admin/events" class="btn btn-secondary float-right">
    <i class="fa-solid fa-xmark"></i> précédent
</a>
<form method="post" action="{{ route('events.update', $event->id) }}">
    @csrf
    @method("PUT")
    <div class="card-body">
        <div class="form-group">
            <label for="name">Titre</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                value="{{ $event->name }}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="Enter date"
                value="{{ $event->date }}">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control" name="content" id="content" cols="30"
                rows="10">{{ $event->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="short_description">Petite Description</label>
            <textarea class="form-control" name="short_description" id="short_description" cols="30"
                rows="10">{{ $event->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30"
                rows="10">{{ $event->description }}</textarea>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-lg btn-success float-right">Modifier </button>
    </div>
</form>
@endsection