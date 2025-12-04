@extends('auth.admin.base')
@section('title', "Liste D'utilisateurs")
@section('content')
    <div class="container-fluid">

        <a href="{{ route('users.create') }}" class="btn btn-success mb-2">
            <i class="fa-solid fa-plus"></i>
            Ajouter Un Nouvel Utilisateur
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
                    <th class="text-center" style="width: 100px;">CD_ETAB</th>
                    <th class="text-center" style="width: 200px;">NOM_ETABL</th>
                    <th class="text-center" style="width: 100px;">typeEtab</th>
                    <th class="text-center" style="width: 100px;">CD_GIPE</th>
                    <th class="text-center" style="width: 100px;">password</th>
                    <th class="text-center"style="width: 100px;">role</th>
                    <th class="text-center"style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
            
        </table>
        
        <div class="container-fluid">
            <!-- ... your existing code ... -->
        
            {{-- pagination --}}
          
        </div>        
    </div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '.update-password', function(e) {
            e.preventDefault();
            var userId = $(this).data('user-id');
            var password = Math.random().toString(36).slice(-8);

            $.ajax({
                url: '/admin/users/' + userId + '/updatePassword',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    password: password
                },
                success: function(response) {
                    toastr.success(response.message); // Show success message
                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                },
                error: function(response) {
                    toastr.error(response.responseJSON.message); // Show error message
                }
            });
        });
   
$(document).ready(function(){
 
 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
     $.ajax({
         url:"{{ route('actionsUser') }}",
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
