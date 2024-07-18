        <!-- http://localhost/piscine-blog-1607/controller/UpdateArticleController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

// appel de l'accès aux données 
require_once('../config/config.php');
require_once('../model/articleRepository.php');

  // dès réception d'un POST 
  function isRequestPost() {
    return $_SERVER["REQUEST_METHOD"] === "POST";
  }

  if (isRequestPost()){
    $method="WHERE `article`.`id` =".$_POST['modification'];
    $ArticleRepository = new ArticleRepository();
    $retourmsge = $ArticleRepository->findArticle($method);
  }

// appel des données de la table 
$method="ORDER BY id";
$ArticleRepository = new ArticleRepository();
$articles = $ArticleRepository->findArticle($method);


 // appel de index post ouverture du fichier  
 require_once('../template/page/UpdateArticleView.php'); 
?>

