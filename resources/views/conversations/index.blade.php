{{-- @if ($user->role == 'admin')
    @extends('auth.admin.base')
    @section('title')
@section ('content')
<div class="container">

    @include('conversations.users',['users' => $users,'unread'=>$unread])
</div>
@endsection
@endif
@if ($user->role == 'user')   --}}
  @extends('auth.user.baseUser')
  @section('title')
@section ('content')
<div class="container">

    @include('conversations.users',['users' => $users,'unread'=>$unread])
</div>
@endsection
{{-- @endif --}}
