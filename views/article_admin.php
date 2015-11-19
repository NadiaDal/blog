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
                <form method="post" 
                      action="index.php?action=<?= $_GET['action'] ?>&id=<?= $_GET['id'] ?>">
                    <label for="title">Article name</label>
                        <input type="text" 

                               name="title" 
                               value="<?= $article['title'] ?>" 
                               class="form-item" 
                               autofocus="" 
                               required><br>
                    <label for="dat">Date</label>
                        <input type="date" 
                               name="dat" 
                               value="<?= $article['date'] ?>"
                               
                               class="form-item" 
                               required><br>
                    <label>Content</label>
                        <textarea class="form-item" 
                                  name="content" 
                                  required><?= $article['content'] ?></textarea><br>
                    <input type="submit" value="Save" class="btn">    
                </form>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>


