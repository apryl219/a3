<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title', 'Bill Spliter')
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Boogaloo|Poiret+One" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Bill Splitter</h1>
    	<img src="/images/Girl1.png" alt="Diner Girl">
	</header>
	<section>
		@yield('content')
	</section>
</body>
</html>