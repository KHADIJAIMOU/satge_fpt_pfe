@extends('auth.admin.base')
@section('title', 'Liste des evenement')

@section('content')
<div class="container-fluid">

    <a href="{{ route('events.create') }}" class="btn btn-success mb-2">
        <i class="fa-solid fa-plus"></i>
        Ajouter Un Nouvel Event.
    </a>
   
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Recherche" />
    </div>
    <h2>Resultat: 
        <span class="badge badge-pill badge-primary" id="total_records"></span>
    </h2>
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


        </tbody>
    </table>

    {{-- pagination --}}
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function(){
 
 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
     $.ajax({
         url:"{{ route('actionsEvent') }}",
         method:'GET',
         data:{query:query},
         dataType:'json',
         success:function(data)
         {
             $('tbody').html(data.table_data);
             $('#total_records').text(data.total_data);
         }
     })
 }

 $(document).on('keyup', '#search', function(){
     var query = $(this).val();
     fetch_customer_data(query);
 });
});

</script>
@endsection
