@extends('layout')

@section('content')

<div id="onlybg">
	<div class="container">
		<br><br>
		<div class="w3-container w3-cyan" id="bar">
			<h2>Student Registration Form</h2>
		</div>
		<div id="bg">
			<div class="form-group">
				<form method="POST" action="/add-student" align="center" class="w3-container" > <!--process-registration; = to add-book -->
					{{ csrf_field() }}
					
				<p>      
					<label class="labels">
						<b>First Name</b>
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" name="firstName" type="text" required>
				</p>
				<p>
					<label class="labels">
						Middle Name
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" type="text" name="middleName" required>
				</p>
				<label class="labels">
						Last Name:
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" type="text" name="lastName" required>
				<p>
					<label class="labels">
						Course
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" type="text" name="course" required>
				</p>
				<p>
					<label class="labels">
						Contact Person
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" type="text" name="contactPerson" required>
				</p>	
				<p>
					<label class="labels">
						Contact Number
					</label>
					<input class="w3-input w3-border w3-hover-pale-green" type="number" name="contactNumber" required>
				</p>			
					
				<input type="submit" value="Save" class="w3-btn w3-hover-cyan" id="button">
				<br><br>
				</form>
			</div>
		</div>
	</div>
	<br><br>
</div>
@endsection