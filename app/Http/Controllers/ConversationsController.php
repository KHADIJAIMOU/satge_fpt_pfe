<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Routing\Redirector;
use App\Http\Requests\StoreMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Notifications\MessageReceived;
use App\Repository\ConversationRepository;
use App\Models\Message;
// use App\Http\Controllers\Controller;
// use App\Http\Requests\User\UserRequest;
// use Illuminate\Support\Facades\Crypt;

class ConversationsController extends Controller
{
    /**
     * @var ConversationRepository
     */
    private $r;

    public function __construct (ConversationRepository $conversationRepository, AuthManager $auth) {
        $this->middleware('auth'); /** renvoyer vers page de connexion si utilisateur déconnecté */
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }

    public function index() {

        return view('conversations/index', [
            'users' => $this->r->getConversations($this->auth->user()->id),
        ]);
    }
    
    public function show (User $user) {

        return view('conversations/show', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $this->r->getMessagesFor($this->auth->user()->id,$user->id)->get()->reverse(),

        ]);
    }
    public function destroy(Request $request){

       
    }

    public function store (User $user , StoreMessage $request) {
        $message = $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );
        return redirect(route('conversations.show', [$user->id]));
  
    }
}
