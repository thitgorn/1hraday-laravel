<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessageController extends Controller
{
    public function submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);
      // create new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      // Save Message
      $message->save();

      // redirect
      return redirect('/')->with('success','Message sent');
    }

    public function getMessage() {
      $message = DB::select('select * from messages');
      // $message = Message::all();
      return $message;
    }
}
