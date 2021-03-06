<?php
require_once("../database.php");
require_once("../models/articles.php");
//include("../views/menu.php");
$link = db_connect();

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = "";

if ($action == "add") {

    if (!empty($_POST)) {
        articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: index.php");
    }
    $article = ["id", "title" => "", "date" => "", "content" => ""];

    include("../views/menu.php");
    include("../views/article_admin.php");

} else if ($action == "edit") {
    if (isset($_POST['id'])) {
        header("Location: index.php");
    }
    $id = (int)$_GET['id'];
    if (!empty($_POST) && $id > 0) {
        articles_edit($link, $id, $_POST['title'], $_POST['content'], $_POST['date']);
        header("Location: index.php");
    }
    $article = articles_get($link, $id);
    include("../views/menu.php");
    include("../views/article_admin.php");
} else if ($action == "delete") {
    $id = $_GET['id'];
    articles_delete($link, $id);
    header("Location: index.php");
} else {
    $articles = articles_all($link);
    include("../views/menu.php");
    include("../views/articles_admin.php");
}
include("../views/footer.php");
?>