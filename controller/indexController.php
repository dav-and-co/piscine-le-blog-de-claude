        <!-- http://localhost/piscine-blog-1607/controller/indexController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

// appel de l'accès aux données 
require_once('../config/config.php');
require_once('../model/articleRepository.php');

// class IndexController{
//     public function index(){
//         $ArticleRepository = new ArticleRepository();
//         $articles = $ArticleRepository->findArticle();
//         return $articles;
//     }
// }
// $indexController = new IndexController();
// $indexController -> index();

    $ArticleRepository = new ArticleRepository();
    $articles = $ArticleRepository->findArticle();

 // appel de index post ouverture du fichier 
 require_once('../template/page/indexView.php'); 
?>