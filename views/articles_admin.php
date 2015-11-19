<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First blog</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div>
                    
                    <a class="addlink" href="index.php?action=add">Add article</a><br>

                    <div>
                        <table class="admin-table">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php foreach ($articles as $a): ?>
                                <tr>
                                    <td><?= $a['date'] ?></td>
                                    <td><?= $a['title'] ?></td>
                                    <td><a href="index.php?action=edit&id=<?= $a['id'] ?>">Edit</a></td>				
                                    <td><a href="index.php?action=delete&id=<?= $a['id'] ?>">Delete</a></td>
                                </tr>
                            <?php endforeach ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
