@extends('layout')

@section('content')
<div id="onlyBgTwo">
	<div class="w3-row"> <br>
		<div id="head" class="3-third">
			<a href="/add-student" class="w3-btn w3-teal w3-hover-white w3-wide">Add New Student</a> 
		</div>

		<div class="w3-container w3-twothird" id="left">
			<h2 style="color:white; margin-left: 50px;">REGISTERED STUDENTS</h2><br>
		</div>
	</div>
	<div class="container" id="bgTable">
		<table class="w3-table w3-bordered w3-striped w3-border w3-hoverable" id="tbl">
			<tr class="w3-cyan" id="tblHeaders">
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Middle Name</th>
				<th>Course</th>
				<th>Contact Person</th>
				<th>Contact Number</th>
				<th colspan="2" style="text-align: center;">Option</th>
			</tr>
			@foreach ($students as $student)
			<tr>
				<td> {{ $student->id}} </td>
				<td> {{ $student->firstName }} </td>
				<td> {{ $student->lastName }} </td>
				<td> {{ $student->middleName }} </td>
				<td> {{ $student->course }} </td>
				<td> {{ $student->contactPerson}} </td>
				<td> {{ $student->contactNumber}} </td>
				<td> 
					<a href="/edit/{{ $student->id }}" class="w3-btn w3-teal w3-round w3-hover-black w3-slim">
					EDIT
					</a> 
				</td>
				<td> 
					<a href="/delete/{{$student->id}}" class="w3-btn w3-red w3-round w3-hover-black w3-slim">
					DELETE
					</a> 
				</td>
			</tr>
			@endforeach
			</table>
		</div>
		<br><br>
</div>
@endsection