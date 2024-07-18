<?php

require_once('../controller/AddArticleController.php');
require_once('../controller/DeleteArticleController.php');
require_once('../controller/indexController.php');
require_once('../controller/UpdateArticleController.php');

// Récupérer l'URL demandée
$request = $_SERVER['REQUEST_URI'];

// Nettoyer l'URL (enlever les paramètres GET)
$uri = parse_url($request, PHP_URL_PATH);

// Enlever le préfixe /piscine-blog/public/
$uriend = str_replace('/piscine-blog-1607/public/', '', $uri);
$uriend = trim($uriend, '/');

if($uriend === "") {
    $indexController = new IndexController();
    $indexController->index();
} else if ($uriend === "index") {
    $addArticleController = new IndexController();
    $addArticleController->index();

} else if ($uriend === "AddArticle") {
    $addArticleController = new AddArticleController();
    $addArticleController->AddArticle();

} else if ($uriend === "DeleteArticle") {
    $addArticleController = new DeleteArticleController();
    $addArticleController->DeleteArticle();

} else if ($uriend === "UpdateArticle") {
    $addArticleController = new UpdateArticleController();
    $addArticleController->UpdateArticle();

}else {
    $indexController = new IndexController();
    $indexController->index();
}
?>