<!-- ouverture du header -->
<?php require_once('../template/partial/header.php');?>

<!-- <?php session_start();
if (!isset($_SESSION['idlogged'])) { 
header ("location:http://localhost/piscine-php-contact/views/connexion.php");
    }?> -->

        <!-- formulaire de saisie des articles -->
<main>
    <section class="formulaire">
        <H1 class="titreh1">Saisie d'un nouvel article</H1>
        <form  method="post">
            <div>
                <label > Titre
                <input type="text" name="title">
                </label>
            </div>
            <div>
                <label > Contenu
                <input type="text" name="content">
                </label>
            </div>
            <div>
                <label > date
                <input type= date name="date">
                </label>
            </div>
            <div>
            <input type="submit" value="Ajouter cet article">
            </div>
        </form>
        <?php

    // message de retour
   
    ?>
    </section>
      
</main>

 <!-- ouverture du footer -->  
<?php require_once('../template//partial/footer.php');?>   




 

   
