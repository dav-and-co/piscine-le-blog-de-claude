        <!-- http://localhost/piscine-blog-1607/controller/indexController.php   -->
         <!-- le git -->
         <!-- https://github.com/dav-and-co/piscine-le-blog-de-claude.git -->

<!--  appel de config  -->
<?php require_once('../config/config.php');


// permet de faire une requête SELECT (lire les données du fichier product) sans parametres
$stmt = $pdo->query("SELECT * FROM article");

// retourne dans un tableau tous les produits 
$articles =  $stmt->fetchAll(PDO::FETCH_ASSOC);

// appel de index post ouverture du fichier 
require_once('../template/page/indexView.php'); 










?>         