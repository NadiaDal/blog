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
                <div class="col-xs-12">
                    <h3>Send us your Article</h3>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <form class="form-horizontal well" method="post"
                      action="index.php?action=<?= $_GET['action'] ?>&id=<?= $_GET['id'] ?>">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-lebel">Article name</label>
                            <div class="col-sm-10">
                                <input type="text"

                                       name="title"
                                       value="<?= $article['title'] ?>"
                                       class="form-item"
                                       autofocus=""
                                       required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-lebel">Date</label>
                            <div class="col-sm-10">
                                <input type="date"
                                       name="date"
                                       value="<?= $article['date'] ?>"

                                       class="form-item"
                                       required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-lebel">Content</label>
                            <div class="col-sm-10">
                            <textarea class="form-item"
                                      name="content"
                                      required><?= $article['content'] ?></textarea>
                            </div>


                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="article-submit" type="submit" value="Save" class="btn btn-primary">Save
                                    article
                                </button>
                            </div>

                        </div>

                    </form>
            </div>
                <div class="col-xs-12 col-sm-3">

                </div>
            </div>

        </div>
        <script>
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>