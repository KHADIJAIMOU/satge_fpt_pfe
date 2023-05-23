@if (Illuminate\Support\Facades\Auth::user()->role == 'admin')
    @extends('auth.admin.base')
    @section('title')
    @section('content')
        <div class="container">
            @include('conversations.users', ['users' => $users, 'unread' => $unread])
        </div>
    @endsection
@else
    @extends('auth.user.baseUser')
    @section('title')
    @section('content')
        <div class="container">
            
            @include('conversations.users', ['users' => $users, 'unread' => $unread])
            {{Illuminate\Support\Facades\Auth::user()->role}}

        </div>
    @endsection
@endif
