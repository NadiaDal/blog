<DOCTYPE! html>
<html>
<head>
	<meta charset="utf8">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body id="body">
	<div class="container main">
		
		
		<div class="row">
                    <div class="col-md-8">
			<?php foreach($articles as $a): ?>
			<div class="article">
			<h3>
				<a href="article.php?id=<?=$a['id']?>">
				<?=$a['title']?></a>
			</h3>
			<em>posted on: <?=$a['date']?></em>
                        <p><?=articles_intro($a['content'])?></p>
			</div>
			<?php endforeach ?>
                    </div>
                    <div clas="col-md-4"></div>
		</div>
		<footer>
			<p>My blog <br/>Copyright &copy; 2015</p> 
                        <a href="admin">Admin panel</a>
		</footer>
	</div>
</body>
</html>
