

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
                        <img class="direct-chat-img" src="{{ asset('/dist/img/user1-128x128.jpg')}}" alt="message user image">
                        <!-- /.direct-chat-img -->                    <p>
                        <strong {!!  (isset($user->unread) && $user->unread != 0) ? 'class="badge" data-badge="'.$user->unread.'"' : '' !!} >
                            {{ $user->CD_ETAB }}
                        </strong>
                        <span>{{ $user->CD_ETAB }}</span>
                    </p>
                    <div class="status active"></div>
                </div>
                </a>
                @endforeach

            </div>

        </div>

</div>
</div>




