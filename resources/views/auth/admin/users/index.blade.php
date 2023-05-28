@extends('auth.admin.base')
@section('title', "Liste D'utilisateurs")
@section('content')
    <div class="container-fluid">

        <a href="{{ route('users.create') }}" class="btn btn-success mb-2">
            <i class="fa-solid fa-plus"></i>
            Ajouter Un Nouvel Utilisateur
        </a>

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

                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->CD_ETAB }}</td>
                        <td class="text-center">{{ $user->NOM_ETABL }}</td>
                        <td class="text-center">{{ $user->typeEtab }}</td>
                        <td class="text-center">{{ $user->CD_GIPE }}</td>
                        <td class="text-center">{{ $user->password }}</td>
                        <td class="text-center">{{ $user->role }}</td>
                        <td class="text-center">
                            <div class="d-flex flex-row justify-content-center">
                                <div class="mr-2">
                                    <a href="{{ '/admin/users/'. $user->id }}" class="btn btn-primary btn-sm">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="{{ '/admin/users/' . $user->id . '/edit' }}" class="btn btn-secondary btn-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="#" class="btn btn-warning btn-sm update-password" data-user-id="{{ $user->id }}">
                                        <i class="fa-sharp fa-solid fa-unlock-keyhole"></i> </a>
                                </div>
                                
                                <div>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{-- pagination --}}
        {{ $users->links() }}
    </div>
@endsection
