<!DOCTYPE html>

<html>
    <head>
        <title>My blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            <h1>First blog</h1>
            <div>
                <form method="post" action="index.php?action=add">
                    <label>Article name<br><input type="text" name="title" value="" class="form-item" autofocus="" required></label><br>
                    <label>Date<br><input type="date" name="date" value="" class="form-item" required></label><br>
                    <label>Content<br><textarea class="form-item" name="content" required></textarea></label><br>
                    <input type="submit" value="Save" class="btn">    
                </form>
            </div>
            <footer><p>My blog <br/>Copyright &copy; 2015</p></footer>
        </div>
    </body>
</html>


