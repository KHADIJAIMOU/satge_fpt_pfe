<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        @php
       use App\Models\Message;

// ...

$unreadMessages = Message::whereNull('read_at')
->where('to_id', Auth::user()->id)

    ->orderBy('created_at', 'desc')
    ->limit(5)
    ->with('from')
    ->get();
    @endphp

    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">{{ $unreadMessages->count() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @foreach ($unreadMessages as $message)
                <a href="/conversations/{{ $message->from_id }}" class="dropdown-item">
                    <div class="media">
                        <img src="{{ asset('storage/' . ($message->from->image)) }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"  style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 100%;">
                                {{$message->from->NOM_ETABL}}
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">{{ $message->content }}</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ $message->created_at }}</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
            @endforeach
            <a href="/conversations" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
          @php
    $count = DB::table('reclamation')->where('status', 0)->count();
    $countM = DB::table('messages')->where('read_at', null)->count();
    $countR = DB::table('rapport')->whereDate('created_at', today())->count();

@endphp

          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">{{ $count+$countM+$countR}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">{{ $count+$countM+$countR}} Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="/conversations" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> {{ $countM}} new messages
              </a>
              <div class="dropdown-divider"></div>
              <a href="/admin/reclamations" class="dropdown-item">
                <i class="fa-solid fa-circle-exclamation"></i> {{ $count}} new reclamation
              </a>
              <div class="dropdown-divider"></div>
              <a href="/admin/repports" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> {{ $countR}} new reports
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
        <li>
            <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button class='btn btn-danger' onclick="this.closest('form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </li>
    </ul>
</nav>