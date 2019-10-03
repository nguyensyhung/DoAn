<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
class LoginController extends Controller
{
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        if (url()->previous() == 'http://nguyensyhung.com/cart/checkout') {
            $this->redirectTo = '/cart/checkout';
        }
    }
    public function postLogin(Request $request)
    {
    	$rules = [
    		'email'		=> 'required|email',
    		'password'  => 'required|min:5'
    	];
    	$messages = [
    		'email.required'	=>	'Email là trường bắt buộc',
    		'email.email'		=>	'Không phải định dạng email',
    		'password.required' => 	'Pass là trường bắt buộc',
    		'password.min'		=> 	'Phải ít nhất 5 ký tự'
    	];
    	$validator = Validator::make($request->all(),$rules, $messages);
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	}
    	else{
    		$email = $request->input('email');
    		$password = $request->input('password');

    		if (Auth::attempt(['email'=>$email, 'password'=>$password], $request->has('remember'))) {
    			return redirect()->intended('/');
    		}
    		else{
    			return redirect()->back();
    		}

    	}
    }

    public function logout()
    {
    	Auth::guard()->logout();

    	return redirect('/');
    }

}
