@extends('auth.admin.base')
@section('title', 'Liste des rapports')
@section('content')
    <div class="container-fluid">

        @if (count($repports) == 0)
            <div> Aucun rapport pour le moment </div>
        @endif

        @if (count($repports) >= 1)
           
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Recherche" />
        </div>
        <h2>Resultat: 
            <span class="badge badge-pill badge-primary" id="total_records"></span>
        </h2>
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
            <tbody></tbody>
        </table>

        {{-- pagination --}}
        {{ $repports->links() }}
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
         url:"{{ route('actions') }}",
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
