<!DOCTYPE html>
<html lang="en">
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
		<div>
                    <ol class="breadcrumb">
                        <li><a href="/blog">Home</a></li>
                        <li class="active">Article</li>
                    </ol>
			<div class="article">
			<h3><?=$article['title']?></h3>
			<em>posted on: <?=$article['date']?></em>
			<p><?=$article['content']?></p>
			</div>
		</div>
            </div>
	</div> 
</body>
</html>
