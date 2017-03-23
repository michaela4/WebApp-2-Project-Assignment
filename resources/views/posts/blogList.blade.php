@extends('layoutProject.layout')

@section('content')

          <!-- Blog Entries Column -->
            <div class="col-md-8"><br><br>

                <h1 class="my-4" style="color:  #F05F40">Blog List </h1>
                <hr>
                <br>

                @foreach ($posts as $post)
                  <a href="/posts/{{ $post->id }}">
                    <ul>{{ $post->title }} by {{ $post->user->name }}</ul>
                  </a>
                @endforeach
                <br>
            </div>

@endsection

       

