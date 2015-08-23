<DOCTYPE! html>
<html>
<head>
	<meta charset="utf8">
	<title>First blog</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>First blog</h1>
		<div>
			<div class="article">
			<h3><?=$article['title']?></h3>
			<em>posted on: <?=$article['date']?></em>
			<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>My blog <br/>Copyright &copy; 2015</p>  
		</footer>
	</div>
</body>
</html>
