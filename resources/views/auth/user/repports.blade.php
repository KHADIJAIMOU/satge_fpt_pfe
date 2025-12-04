@extends('auth.user.baseUser')
    @section('title', 'Liste des rapports')
@section('content')
<div class="container-fluid">
    <a href="{{ route('rapport.index') }}" class="btn btn-success mb-2">
        <i class="fa-solid fa-plus"></i>
        Ajouter Un Nouvel rapport
    </a>
    <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Recherche" />
                </div>
        <h2>Resultat: 
        <span class="badge badge-pill badge-primary" id="total_records"></span>

    </h2>

    
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


    </tbody>
</table>


@endif

</div>
@endsection
@section('scripts')
<script>
$(document).ready(function(){
 
 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
     $.ajax({
         url:"{{ route('action') }}",
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
