         <!-- http://localhost/piscine-blog-1607/controller/AddArticleController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<?php 

require_once('../config/config.php');
// appel de l'accès aux données 
require_once('../model/articleRepository.php');

 // appel de index post ouverture du fichier 
 require_once('../template/page/AddArticleView.php');

 function isRequestPost() {
    return $_SERVER["REQUEST_METHOD"] === "POST";
}
    
function getFormErrors() {
    $errors = [];
        if (mb_strlen($_POST['title']) < 2) {
        $errors[] = "Le titre doit faire plus de 2 caractères";
    }
        if (mb_strlen($_POST['title']) > 20) {
        $errors[] = "Le titre doit faire moins de 20 caractères";
    }
            if (mb_strlen($_POST['content']) < 5) {
        $errors[] = "Le contenu doit faire plus de 5 caractères";
    }
        if (mb_strlen($_POST['content']) > 200) {
        $errors[] = "Le contenu doit faire moins de 200 caractères";
    }
    return $errors;
}

if (isRequestPost()) { 
    if (empty(getFormErrors())) {
        $ArticleRepository = new ArticleRepository();
        $articles = $ArticleRepository->Add($_POST['title'],$_POST['content'],$_POST['date']);
        echo "<p>".$articles."</p>";
        } else {
            foreach(getFormErrors() as $error) {
                echo "<p>".$error."</p>";
            }
    }
}    

?>

