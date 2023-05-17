{{-- @if ($user->role == 'admin') 
    @extends('auth.admin.base')
    @section('content')
    @section('title')
    <div class="container">
        <div class="row">
            @include('conversations.users', ['users' => $users])
            <div class="col-md-9">
              <div class="card">
                    <div class="card-header">{{ $user->CD_ETAB }}
                        <div class="card-body conversations">
                            <div class="card-body">
                                
                                <!-- Conversations are loaded here -->
                                <div class="col col">
                                  <!-- Message. Default to the left -->
                                  @foreach ($messages as $message)

                                  <div class="direct-chat-msg {{ $message->from->id !== $user->id ? 'right' : 'left' }}">
                                    <div class="direct-chat-infos clearfix">
                                      <span class="direct-chat-name {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">{{ $message->from->id !== $user->id ? 'Moi' : $message->from->CD_ETAB }}</span>
                                      <br>
                                      <span class="direct-chat-timestamp  {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{ asset('/dist/img/user1-128x128.jpg')}}" alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text {{ $message->from->id !== $user->id ? 'bg-info' : 'bg-warning' }}">
                                        
                                        {!! nl2br(e( $message->content)) !!}                                    </div>
                                    <!-- /.direct-chat-text -->
                                    
                                  </div>
                                  @endforeach

                            
                           
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

{{-- @else
    @extends('auth.user.baseUser')
    @section('content')
    @section('title')

    <div class="container">
        <div class="row">
            @include('conversations.users', ['users' => $users])
            <div class="col col">
                <div class="card">
                    <div class="card-header">{{ $user->CD_ETAB }}
                        <div class="card-body conversations">
                            <div class="card-body">
                                
                                <!-- Conversations are loaded here -->
                                <div class="col col">
                                  <!-- Message. Default to the left -->
                                  @foreach ($messages as $message)

                                  <div class="direct-chat-msg {{ $message->from->id !== $user->id ? 'right' : 'left' }}">
                                    <div class="direct-chat-infos clearfix">
                                      <span class="direct-chat-name {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">{{ $message->from->id !== $user->id ? 'Moi' : $message->from->CD_ETAB }}</span>
                                      <br>
                                      <span class="direct-chat-timestamp  {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{ asset('/dist/img/user1-128x128.jpg')}}" alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text {{ $message->from->id !== $user->id ? 'bg-info' : 'bg-warning' }}">
                                        
                                        {!! nl2br(e( $message->content)) !!}                                    </div>
                                    <!-- /.direct-chat-text -->
                                    
                                  </div>
                                  @endforeach

                            
                           
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

@endif
 --}}
 @extends('auth.admin.base')


 @section('content')
     <div class="container">
         <div class="row">
             @include('conversations.users', ['users' => $users,'unread'=>$unread])
             <div class="col-md-9">
                 <div class="card">
                     <div class="card-header">{{ $user->name }}
                         <div class="card-body conversations">
                               
                          @foreach ($messages as $message)

                          <div class="direct-chat-msg {{ $message->from->id !== $user->id ? 'right' : 'left' }}">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">{{ $message->from->id !== $user->id ? 'Moi' : $message->from->CD_ETAB }}</span>
                              <br>
                              <span class="direct-chat-timestamp  {{ $message->from->id !== $user->id ? 'float-right' : 'float-left' }}">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('/dist/img/user1-128x128.jpg')}}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text {{ $message->from->id !== $user->id ? 'bg-info' : 'bg-warning' }}">
                                
                                {!! nl2br(e( $message->content)) !!}                                    </div>
                            <!-- /.direct-chat-text -->
                            
                          </div>
                          @endforeach
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