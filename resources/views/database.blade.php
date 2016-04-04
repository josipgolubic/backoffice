<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

	@foreach ($users as $user)
    	<p>This is user {{ $user->name }}</p>
	@endforeach

Test
</body>
</html>