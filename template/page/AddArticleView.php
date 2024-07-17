<!-- ouverture du header -->
<?php require_once('../template/partial/header.php');?>


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
    if (isRequestPost()) { 
        if (empty(getFormErrors())) {
            echo "<p>".$retourmsge."</p>";
        } else {
            foreach(getFormErrors() as $error) {
                echo "<p>".$error."</p>";
            }
        }
    } 
    ?>
    </section>
      
</main>

 <!-- ouverture du footer -->  
<?php require_once('../template//partial/footer.php');?>   




 

   
