<DOCTYPE! html>
<html>
<head>
	<meta charset="utf8">
	<title>First blog</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>First blog</h1>
                <a href="index.php?action=add">Add article</a><br>
               
		<div>
			<table class="admin-table">
				<tr>
					<th>Date</th>
					<th>Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['date']?></td>
					<td><?=$a['title']?></td>
                                        <td><a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a></td>				
                                        <td><a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a></td>
					</tr>
				<?php endforeach ?>
				</table>
				
		</div>
		<footer>
			<p>My blog <br/>Copyright &copy; 2015</p>  
		</footer>
	</div>
</body>
</html>
