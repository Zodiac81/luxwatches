<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use View;

class MessageController extends Controller
{
    public function index(){
		$messages = Message::all();
		return View::make('admin.messages_list',compact('messages'));
	}
	
	public function destroy($id){
		        echo"<pre>";
 print_r($request->all());
 exit;
		$message = Message::find($id);
		$message->delete();
		$value = "Удалено";
           Session::flash('success', $value);

           return redirect()->route('message_list');
	}
}
