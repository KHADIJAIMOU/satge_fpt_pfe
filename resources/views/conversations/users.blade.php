

<div class="column is-3" >
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
                        <!-- /.direct-chat-img -->                    <p>
                        <strong {!!  (isset($user->unread) && $user->unread != 0) ? 'class="badge" data-badge="'.$user->unread.'"' : '' !!} >
                            {{ $user->CD_ETAB }} 
                        </strong>
                    </p>
                    <div class="status active"></div>
                </div>
                </a>
                <input disabled type="text" value="{{$user->NOM_ETABL }}">

                @endforeach

            </div>

        </div>

</div>
</div>




