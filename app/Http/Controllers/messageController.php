<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messageController extends Controller
{
    public function index()
    {
      $messages =Message::all();
      return view('/messageTable');
    }
    public function create()
    {
        return view('/contactUs');
    }
    public function store()
    {
        $message = new Message();

        $message->name =request('name');
        $message->email =request('email');
        $message->subject =request('subject');
        $message->message =request('message');
        $message->save();

        return redirect('/thanks');
    }
    public function display()
    {
      $messages = Message::all();
      return view('messageTable')->with('messages',$messages);
    }

}
