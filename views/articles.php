<DOCTYPE! html>
<html>
<head>
	<meta charset="utf8">
	<title>First blog</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body id="body">
	<div class="container main">
		<h1>First blog</h1>
		<a href="admin">Admin panel</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article">
			<h3>
				<a href="article.php?id=<?=$a['id']?>">
				<?=$a['title']?></a>
			</h3>
			<em>posted on: <?=$a['date']?></em>
			<p><?=$a['content']?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>My blog <br/>Copyright &copy; 2015</p>  
		</footer>
	</div>
</body>
</html>
