@extends("auth.baseUser")
@section('title')

<form>
    <div class="card-body">

            <div class="row">
                <div class="col col-4"></div>
                <div class="col col-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          
                        </ol>
                        <div class="carousel-inner">
                            
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
        
        
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                value=" " disabled>
        </div>
        
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"
                disabled> </textarea>
        </div>
        
    </div>
</form>
@endsection