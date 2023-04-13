@extends("admin.base")
@section('title', 'acide Details')
@section('content')
<a href="/admin/acides" class="btn btn-secondary float-right">
    <i class="fa-solid fa-arrow-left"></i> précédent
</a>
<form>
    <div class="card-body">
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
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset($image->path) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col col-4"></div>
            </div>
        @endif
        
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                value="{{ $acide->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter price"
                value="{{ $acide->price }}" disabled>
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"
                disabled>{{ $acide->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="short_description">Petite Description</label>
            <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="10"
                disabled>{{ $acide->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                disabled>{{ $acide->description }}</textarea>
        </div>
    </div>
</form>
@endsection