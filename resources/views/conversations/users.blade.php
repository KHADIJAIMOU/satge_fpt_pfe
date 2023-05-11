

{{-- @if (auth()->user()->role == 'admin')
<div class="col-md-3">
    @foreach ($users as $user)
        @if ($user->role === 'admin')
            <div class="list-group">
                <a class="list-group-item d-flex justify-content-between align-items-center" href="{{route('conversations.show',$user->id)}}">
                    {{ $user->NOM_ETABL }} {{ $user->unread }}
                    @if(isset($unread [$user->id]))
                        <span class="badge badge-pill badge-primary">{{ $unread [$user->id] }}</span>
                    @endif
                </a>
            </div>
        @endif
    @endforeach
</div>
@endif --}}
{{-- @if (auth()->user()->role == 'user') --}}

<div class="col-md-3">
    @foreach ($users as $user)
        @if ($user->role === 'user')
            <div class="list-group">
                <a class="list-group-item d-flex justify-content-between align-items-center" href="{{route('conversations.show',$user->id)}}">
                    {{ $user->NOM_ETABL }} {{ $user->unread }}
                    @if(isset($unread [$user->id]))
                        <span class="badge badge-pill badge-primary">{{ $unread [$user->id] }}</span>
                    @endif
                </a>
            </div>
        @endif
    @endforeach
</div>
{{-- @endif --}}
