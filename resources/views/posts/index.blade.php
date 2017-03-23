@extends('layoutProject.layout')

@section('content')
        
          <!-- Blog Entries Column -->
            <div class="col-md-8"><br><br>

            @if (Session::has('flash_message'))
	            <div class="alert alert-danger">
	              {{ Session::get('flash_message')}}
	            </div>
          	@endif

                <h1 class="my-4" style="color:  #F05F40">Share your Thoughts! 
                  <small>Explore with Us!</small>
                </h1> <hr>

                @foreach ($posts as $post)
               	  @include('layoutProject.posts')

                @endforeach
            </div>        
@endsection

       

