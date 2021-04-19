<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class UserController extends Controller
{
    public function signup() {
    	return view('user.signup');
    }

    public function store(Request $request){
    	// Validate the data of the user
    	$validated = $request->validate([
    		'firstNameInput' => 'required',
    		'lastNameInput' => 'required',
    		'userNameInput' => 'required',
    		'emailInput' => 'required|email',
    		'passwordInput' => 'required',
    		'passwordRepeatInput' => 'required|same:passwordInput'
    	]);

    	User::create([
    		'firstname' => $request->firstNameInput,
    		'lastname' => $request->lastNameInput,
    		'username' => $request->userNameInput,
    		'email' => $request->emailInput,
    		'password' => Hash::make($request->passwordInput)
    	]);

    	return redirect()->route('pages.index')->with('success', 'Je bent succesvol aangemeld');
    }

    public function login(){
    	return view('user.login');
    }

    public function getin(Request $request){
    	// Validate the data of the user
    	$user = new User();

    	$validated = $request->validate([
    		'emailInput' => 'required|email',
    		'passwordInput' => 'required'
    	]);

    	$userData = $user->where('email', $request->emailInput)->get()->first();

    	// Check if the password is correct
    	if(Hash::check($request->passwordInput, $userData->password)){
    		session()->put(['userData' => $userData]);
    		return redirect()->route('pages.index')->with('success', 'Je bent succesvol ingelogd');
    	}
    	else{
    		return redirect()->route('user.login')->with('error', 'Je inloggegevens kloppen niet');
    	}
    }

    public function logout() {
        session()->forget('userData');
        return redirect()->route('pages.index')->with('success', 'Je bent succesvol uitgelogd');
    }
}
