        <!-- http://localhost/piscine-blog-1607/public/index   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

class IndexController {
    public function index(){   

        // appel de l'accès aux données 
        require_once('../config/config.php');
        require_once('../model/articleRepository.php');
        $method="ORDER BY date DESC";
            $ArticleRepository = new ArticleRepository();
            $articles = $ArticleRepository->findArticle($method);

        // appel de index post ouverture du fichier 
        require_once('../template/page/indexView.php'); 
    }
}
?>