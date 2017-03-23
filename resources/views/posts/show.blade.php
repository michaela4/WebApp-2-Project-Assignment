@extends('layoutProject.layout')

@section('content')
	<div class="col-sm-8 blog-main">
	<br><br><br>
		<h1>{{ $post->title }}</h1>
		<em style="color: #F05F40"> by {{ $post->user->name }}</em><hr><br>
		{{ $post->body }}<br>

		<div class="comments">
			<ul class="list-group"><br>
				@foreach ($post->comments as $comment) 
					<li class="list-group-item">
						<em><strong>
							{{ $comment->created_at->diffForHumans() }} by &nbsp;
						</strong></em>
						<strong>
							{{ $comment->user->name }}: &nbsp;
						</strong>
						{{ $comment->body }}
					</li>
				@endforeach
			</ul>
		</div> 
		<br>
		
	@if (Route::has('login'))
		@if (Auth::check())
		<!--Adding Comments-->
			
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}

					<div class="form-group">
						<textarea name="body" placeholder="Add your comment here." class="form-control"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>

				@include('layoutProject.errors')
			</div>	
		</div>

	@endif
	@endif
		<br>
	</div>


@endsection
