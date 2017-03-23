@extends('layoutProject.layoutNoHeader')

@section('content')

	<div class="col-sm-8">
		<br><h1>Sign In</h1><hr>

		<form method="POST" action="/loginUser"> 
			{{ csrf_field() }}
			
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>

			@include('layoutProject.errors')
		</form>
		
	</div>

@endsection