<!DOCTYPE html>
<html>
    
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
        <title>First blog</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
</head>
   
<body>
	<div class="container">
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
            
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
