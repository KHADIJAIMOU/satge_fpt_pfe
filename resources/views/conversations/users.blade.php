<div class="column is-3">
    <div id="chatbox">
        <div id="friendslist">
            <div id="topmenu">
                <span class="friends"></span>
            </div>

            <div id="friends">
                @foreach($users as $user)
                    <a href="/conversations/{{ $user->id }}">
                        <div class="friend">
                            <img class="direct-chat-img" src="{{ asset('storage/' . $user->image) }}" alt="message user image">
                            @if($user->status == 0)
                                <div class="status active"></div>
                            @elseif ($user->status == 1)
                                <div class="status1 active"></div>
                            @endif
                            <p>
                                <strong {!! (isset($user->unread) && $user->unread != 0) ? 'class="badge" data-badge="'.$user->unread.'"' : '' !!} >
                                    {{ $user->CD_ETAB }}  {{ $user->unread }}
                                </strong>
                                @if(isset($unread[$user->id]))
                                    <span class="badge badge-pill badge-primary">{{ $unread[$user->id] }}</span>
                                @endif
                            </p>
                        </div>
                    </a>
                    <input disabled type="text" value="{{ $user->NOM_ETABL }}">
                @endforeach

                <!-- Pagination Links -->
            </div>
        </div>
    </div>
</div>