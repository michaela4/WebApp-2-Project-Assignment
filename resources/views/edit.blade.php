@extends('layout')

@section('content')

	<div id="onlybg">
		<div class="container">
			<br><br>
			<div class="w3-container w3-cyan" id="bar">
				<h2>Edit Student Form</h2>
			</div>
			<div id="bg">
			<div class="form-group">
				<form method="POST" action="/save-student" align="center" class="w3-container"> 
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $student->id }}">

					<p>      
						<label class="labels">
							<b>First Name</b>
						</label>
						<input type="text" name="firstName" value="{{ $student->firstName }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>
					<p>      
						<label class="labels">
							<b>Last Name</b>
						</label>
						<input type="text" name="lastName" value="{{ $student->lastName }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>
					<p>      
						<label class="labels">
							<b>Middle Name</b>
						</label>
						<input type="text" name="middleName" value="{{ $student->middleName }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>
					<p>      
						<label class="labels">
							<b>Course</b>
						</label>
						<input type="text" name="course" value="{{ $student->course }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>
					<p>      
						<label class="labels">
							<b>Contact Person</b>
						</label>
						<input type="text" name="contactPerson" value="{{ $student->contactPerson }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>
					<p>      
						<label class="labels">
							<b>Contact Number</b>
						</label>
						<input type="text" name="contactNumber" value="{{ $student->contactNumber }}" class="w3-input w3-border w3-hover-pale-green" required>
					</p>		
								
					<input type="submit" value="Save Student" class="w3-btn w3-hover-cyan" id="button"> <br><br>
				</form>
			</div>
			</div>
		</div>
		<br><br>
	</div>
@endsection