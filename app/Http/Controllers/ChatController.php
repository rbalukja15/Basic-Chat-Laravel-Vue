<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use Auth;
use App\Events\MessagePosted;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('chats/chat');
    }

    public function show(){
        return Message::with('user')->get();
    }

    public function store(){
        $user = Auth::user();

        $message = $user->message()->create([
            'message' => request()->get('message')
        ]);


        //Announce that a new message has been posted
        broadcast(new MessagePosted($message, $user))->toOthers();

        return ['status' => 'OK'];
    }
}
