@extends('layoutProject.layoutNoHeader')

@section('content')
	<div class="col-sm-8 blog-main"><br><br>
		<h1>Publish a Post</h1>
		<h6><em>What's on your mind...</em></h6>
			<div class="form-group">
			<hr>
				<form method="POST" action="/posts"> 
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="title">Title:</label>
						<input type="text" class="form-control" id="title" name="title">
					</div>
					<div class="form-group">
						<label for="body">Body:</label>
						<textarea id="body" name="body" class="form-control"  rows="13"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Publish</button>

				</form>

				@include ('layoutProject.errors')
		</div>
	</div>
@endsection