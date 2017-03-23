<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AuthController extends Controller
{ 
   public function __construct(){
        $this->middleware('guest', [ 
           // 'except' => 'storeUser',
            // 'except' => 'register',
            'except' => 'logout',      //ADDED
            'except' => 'storeSignedInUser' //added
            ]);
    }

    public function register (){
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    	return view('sessions.registerUser', compact('archives'));
    }

    public function storeUser (){
    	//validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    		]);

    	// create and save the user
    	$user = User::create(request(['name', 'email', 'password']));
        $user->save(); // I added this

    	//sign them in
    	auth()->login($user);

    	//redirect to home page
    	return redirect()->home();
    }

    public function login(){
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        return view('sessions.loginUser', compact('archives'));

    }

    public function storeSignedInUser() {
        //attempt to authenticate user then log them in
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials then try again.'
                ]);
        }
        
        return redirect()->home();
    }

    public function logoutSignedUser(){
    	auth()->logout();
    	return redirect()->home();

    }
}
