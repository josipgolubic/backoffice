<html class="full">
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			.full {
			    background: url('/images/backoffice.jpeg') no-repeat center center fixed;
			    -webkit-background-size: cover;
			    -moz-background-size: cover;
			    background-size: cover;
			    -o-background-size: cover;
			}

			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				font-weight: 900;
    			text-shadow: 2px 2px 3px rgba(0,0,0,0.6)
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Backoffice</div>
				<div class="container">
					<a href="/maps" class="btn btn-default btn-lg">Twitter</a>
				</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
