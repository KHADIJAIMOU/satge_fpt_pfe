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

class ConversationsController extends Controller
{
    /**
     * @var ConversationRepository
     */
    private $r;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth)
    {
        $this->middleware('auth');
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }

    public function index()
    {
        return view('conversations.index', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'unread' => $this->r->unreadCount($this->auth->user()->id)
        ]);
    }

    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        // Perform the search query to retrieve users based on the input query
        $users = User::where('id', 'like', '%' . $query . '%')
            ->orWhere('CD_ETAB', 'like', '%' . $query . '%')
            ->orWhere('NOM_ETABL', 'like', '%' . $query . '%')
            ->orWhere('image', 'like', '%' . $query . '%')
            ->orWhere('status', 'like', '%' . $query . '%')
            ->get();

        // You can perform additional logic or filtering if needed

        // Prepare the response data
        $response = [
            'users' => $users,
            // Include any other necessary data for updating the friends list
        ];

        return response()->json($response);
    }

    public function show(User $user)
    {
        $me = $this->auth->user();

        $messages = $this->r->getMessagesFor($me->id, $user->id)->paginate(5);
        $unread = $this->r->unreadCount($me->id);

        if (isset($unread[$user->id])) {
            $this->r->readAllFrom($user->id, $me->id);
            unset($unread[$user->id]);
        }

        return view('conversations.show', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $messages,
            'unread' => $unread
        ]);
    }

    public function destroy(Message $message)
    {
        // Implement the logic to delete a message if needed
    }

    public function store(User $user, StoreMessage $request)
    {
        $message = $this->r->createMessage(
            $request->get('content'),
            $this->auth->user()->id,
            $user->id
        );

        return redirect(route('conversations.show', [$user->id]));
    }
}
