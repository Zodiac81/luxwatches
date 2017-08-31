<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;

class ContactController extends MainSiteController
{
    //
	public function __construct(){
        parent::__construct();
        $this->template = 'site-template.contact';
        $this->breadcrumbs = 'Обратная связь';
    }
    
    public function showForm(){

    	if(view()->exists('site-template.contact')){
	
    	return $this->renderOutput();
    }

    else(abort(404));

    }
	
	public function getMessage(Request $request){
		
		$this->validate($request, [
        'name' => 'required',
		'email'=>'required',
        'message' => 'required|max:1000',
		]);
		
		if(!empty($request->_token)&&($request->contactUsForm=='key')){
			$user_message = new Message();
			$user_message->user_name = $request->name;
			$user_message->email = $request->email;
			$user_message->message = $request->message;
			$user_message->save();
			
			Session::flash('success','Ваше сообщение отправлено.');
			return redirect()->route('contact');
			
		}else{
			Session::flash('success','Ваше сообщение не отправлено. Попробуйте ещё раз.');
			return redirect()->route('contact');
		}
		
		
	}
}
