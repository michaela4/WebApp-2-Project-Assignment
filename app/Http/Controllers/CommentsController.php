<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\User; // Added

class CommentsController extends Controller
{
	public function __construct(){ // Added
        $this->middleware('guest', [ 
            'except' => 'store'
            ]);
    }

    public function store (Post $post){

    	$this->validate(request(), ['body'=>'required|min:2']);

        /*if (! auth()->attempt(request(['body']))) {
            return back()->withErrors([
                'message' => 'Please register or sign in first to post a comment.'
                ]);
        } // ADDED
*/
    	Comment::create([
    		'body' => request('body'),
    		'post_id' => $post->id,
            'user_id' => auth()->id() // Added
            ]);

    	return back();
    }
}
