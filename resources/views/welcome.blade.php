<html class="full">
	<head>
		<title>Laravel</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link href="{{ asset('/css/landing.css') }}" rel="stylesheet">
    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="intro-header">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="intro-message">
	                        <h1>Backoffice</h1>
	                        <h3>Manage Your Maps</h3>
	                        <hr class="intro-divider">
	                        <ul class="list-inline intro-social-buttons">
	                            <li>
	                                <a href="/maps" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Maps</span></a>
	                            </li>
	                            <li>
	                                <a href="{{ url('/auth/login') }}" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Login</span></a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- /.container -->
	    </div>
	    <!-- /.intro-header -->
	</body>
</html>
