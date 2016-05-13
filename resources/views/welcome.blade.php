<html class="full">
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="{{ asset('/css/landing.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Backoffice</div>
				<a href="/maps" class="btn btn-default btn-lg">Maps</a>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
