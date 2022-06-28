<?php

namespace App\Http\Controllers;

use App\Mail\MessageUserMail;
use App\Models\MessageUser;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserMessageRequest;

class MessageUserController extends Controller
{
    public function index(){
        $messageUser = MessageUser::where('user_id', auth()->user()->id)->get();
        return view('backend.user_messages', ['messageUsers' => $messageUser]);   
    }

    public function sendMessage(UserMessageRequest $request) {
        $messageUser = new MessageUser;
        $messageUser->user_id   = $request->userId;
        $messageUser->name      = $request->name;
        $messageUser->email     = $request->email;
        $messageUser->message   = $request->message;
        $messageUser->save();

        $sendToUser = User::where('id', $request->userId)->firstOrFail();

        $user = [
            'name'      => $request->name,
            'email'     => $request->email,
            'message'   => $request->message,
            'userName'  => $sendToUser->name,
        ];
        
        Mail::to($sendToUser->email)->send(new MessageUserMail($user));
        return redirect()->back()->with('message', 'Message has been successfully sent to agent!');
    }

    public function deleteMessage($id){
        $messageUser = MessageUser::find($id);
        $messageUser->delete();

        return redirect()->back()->with('message', "Message has been deleted successfully!");
    }
}
