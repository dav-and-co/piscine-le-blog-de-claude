        <!-- http://localhost/piscine-blog-1607//public/DeleteArticleController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

class DeleteArticleController {
  public function DeleteArticle() {

    // appel de l'accès aux données 
    require_once('../config/config.php');
    require_once('../model/articleRepository.php');



          // dès réception d'un POST 
          function isRequestPost() {
            return $_SERVER["REQUEST_METHOD"] === "POST";
          }

      if (isRequestPost()){
        $ArticleRepository = new ArticleRepository();
        $retourmsge = $ArticleRepository->supprArticle($_POST['suppression']);
      }

    // appel des données de la table 
    $method="ORDER BY id";
    $ArticleRepository = new ArticleRepository();
    $articles = $ArticleRepository->findArticle($method);

    // appel de index post ouverture du fichier  
    require_once('../template/page/DeleteArticleView.php'); 

  }
}

?>

