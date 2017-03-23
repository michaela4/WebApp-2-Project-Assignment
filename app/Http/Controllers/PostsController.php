<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show', 'showList']);
    }

    public function index(){

        $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        return view('posts.index', compact('posts', 'archives'));
    }

    public function show($id){
    	$post = Post::find($id);
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    	return view('posts.show', compact('post', 'archives'));
    }

    public function showList(){
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        return view('posts.blogList', compact('posts', 'archives'));
    }

    public function create(){
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

    	return view('posts.create', compact('archives'));
    }

    public function store(){
     	// for server side validation
     	$this->validate(request(), [
     		'title' => 'required',
     		'body' => 'required'
     		]);

     	// getting what the user has inputed
    	$post = new Post;
    	$post->title = request('title');
    	$post->body = request('body');
        $post->user_id = auth()->id();
    	// saving to db
    	$post->save();
    	// return to home page

        //the flash message
        \Session::flash('flash_message', 'Your article has been created.');

    	return redirect ('/');
    }

   
}