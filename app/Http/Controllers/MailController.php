<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function html_email(Request $request){
    	
    	$this->validate($request, 
    		['email' => 'email',
             'name'	=> 'required'],
             ['name.required' => 'Необходимо ввести своё имя',
              'email.email' => 'Введите корректный электронный адрес']);

        $name = $request->input('name');
        $guest_email = $request->input('email');

        $data = ['name' => $name];

    	Mail::send('mail.basic', $data, function ($message)use($guest_email) {

    	    $message->from('alexlekun@gmail.com', 'Александр')->subject('Письмо из портофлио');
    	
    	    $message->to($guest_email, '');
    	});

    	return redirect('/')->with('success', 'Письмо успешно отправлено на указанный электронный ящик');
    }
}
