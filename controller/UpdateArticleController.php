        <!-- http://localhost/piscine-blog-1607//public/UpdateArticleController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

class UpdateArticleController{
  public function UpdateArticle() {

    // appel de l'accès aux données 
    require_once('../config/config.php');
    require_once('../model/articleRepository.php');

    // appel des données de la table 
    $method="ORDER BY id";
    $ArticleRepository = new ArticleRepository();
    $articles = $ArticleRepository->findArticle($method);

    // dès réception d'un POST 
    function isRequestPost() {
      return $_SERVER["REQUEST_METHOD"] === "POST";
    }

    if (isRequestPost()){
      $ArticleRepository = new ArticleRepository();
      var_dump ($_POST['modification']);
      $article = $ArticleRepository->findOneById($_POST['modification']);
      require_once('../template/partial/popup.php'); 
    }





    // appel de index post ouverture du fichier  
    require_once('../template/page/UpdateArticleView.php'); 
  }
}
?>
