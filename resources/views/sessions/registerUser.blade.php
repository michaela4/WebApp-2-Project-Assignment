@extends('layoutProject.layoutNoHeader')

@section('content')

	<div class="col-sm-8"><br>
		<h1>Register</h1><hr><br>

		<form method="POST" action="/registerUser"> 
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="form-group">
						<label for="password_confirmation">Confirm Password:</label>
						<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
					</div>

					@include('layoutProject.errors')

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>

		</form>
	</div>

@endsection