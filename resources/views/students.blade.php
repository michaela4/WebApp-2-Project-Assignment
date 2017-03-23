<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($students as $student)
		First Name: {{ $student->firstName}} <br>
		Last Name: {{ $student->lastName}} <br>
	@endforeach
</body>
</html>