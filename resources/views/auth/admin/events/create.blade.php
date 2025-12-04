@extends("auth.admin.base")
@section('title', 'Créer un nouvel evenement')

@section('content')
    <a href="/admin/events" class="btn btn-secondary float-right mb-3">
        <i class="fa-solid fa-xmark"></i> Annuler
    </a>

    <form method="post" action="{{ route('events.store') }}" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <!--<input type="file" class="custom-file-input" id="images" name="images" multiple >-->
                    <input type="file" name="images[]" multiple class="form-control" accept="image/*">
                    <!--<label class="custom-file-label" for="images">Choose file</label>-->
                </div>
            </div>

            <div class="form-group">
                <label for="name">Titre</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                    value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="date"><Datag>Date</Datag></label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Enter date"
                    value="{{ old('date') }}">
            </div>
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="short_description">Petite Description</label>
                <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="10">{{ old('short_description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-lg btn-success float-right">Ajouter</button>
        </div>
    </form>
@endsection
