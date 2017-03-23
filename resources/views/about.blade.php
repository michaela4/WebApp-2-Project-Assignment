<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>About Tasks</h1>

	@foreach ($tasks as $task)

		<li>{{ $task }}</li>

	@endforeach


</body>
</html>