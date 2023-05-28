@extends('auth.user.baseUser')


@section('content')
    <div class="container">
        <div class="row">
            @include('conversations.users', ['users' => $users, 'unread' => $unread])
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $user->name }}
                        <div class="card-body conversations">
                            @if ($messages->hasMorePages())
                                <div class="text-center">
                                    <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">
                                        Voir les messages précédents.
                                    </a>
                                </div>
                            @elseif(empty($messages->nextPageUrl()))
                                <div class="text-center">
                                    <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">
                                        Voir les messages précédents.
                                    </a>
                                </div>
                            @endif
                            @foreach (array_reverse($messages->items()) as $message)
                                <div class="direct-chat-msg {{ $message->from->id !== $user->id ? 'right' : 'left' }}">
                                    <div class="direct-chat-infos clearfix">
                                        <span
                                            class="direct-chat-name {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">{{ $message->from->id !== $user->id ? 'Moi' : $message->from->NOM_ETABL }}</span>
                                        <br>
                                        <span
                                            class="direct-chat-timestamp  {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">{{ $message->created_at }}</span>
                                    </div>

                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img"
                                        src="{{ asset('storage/' . ($message->from->id !== $user->id ? $message->from->image : $user->image)) }}"
                                        alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div
                                        class="direct-chat-text {{ $message->from->id !== $user->id ? 'bg-info' : 'bg-warning' }}">

                                        {!! nl2br(e($message->content)) !!}

                                    </div>


                                </div>
                            @endforeach
                            @if ($messages->hasMorePages() && $messages->currentPage() > 1)
                                <div class="text-center">
                                    <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">
                                        Voir les messages suivant.
                                    </a>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                            @endif
                            </ul>
                        </div>

                        <form action="" method="post">
                            {{ csrf_field() }}

                            <div class="input-group">
                                <input type="text" name="content" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
