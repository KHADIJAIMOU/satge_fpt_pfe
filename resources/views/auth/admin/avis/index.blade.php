@extends('auth.admin.base')

@section('title', 'Liste des avis')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Avis</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach ($avis as $avi)
                        <div class="col-sm-4">
                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon bg-primary">
                                        {{ $avi->type }}
                                    </div>
                                </div>
                                {{ $avi->objet }} <br />
                                <small> {{ $avi->detail }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $avis->links() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection
