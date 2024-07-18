<!-- ouverture du header -->
<?php require_once('../template/partial/header.php');?>

<main>
    <section class="affichage">

        <h1 class="titreh1 w20">Liste des articles existants</h1>
        <!-- affichage des données du fichier -->
            <div class="divsupprart">
                <?php foreach ($articles as $article) { ?>
                    <article class="flexalign">
                    <?php   echo "<p>".$article['id']."</p>";
                            echo "<p>".$article['title']."</p>";
                            echo "<p>".$article['content']."</p>";
                            $createDate= new DateTime($article['date']);
                            echo "<p> date : ".$createDate->format("l d F Y")."</p>"; ?>
                    </article>
                <?php } ?>
            </div>

    </section>
    <section>
         <!-- sélection de l'article à modifier -->
         <h1 class="titreh1">Indiquez le numéro de l'article à modifier </h1>

         <form  method="post">
            <div>
                <label > Article à modifier
                <input type="text" name="modification">
                </label>
                </div>
            <div>
            <input class="marginput" type="submit" value="modifier cet article">
            </div>
        </form>
        
        












        <?php
        // message de retour
        if (isRequestPost()) {
            if ($retourmsge) {
                echo "<p> Article supprimé avec succès !</p>";   
            } else {
                echo "<p> Echec de lla suppression de l'article !</p>"; 
            }
        } 
        ?>

    </section>
  
    
</main>

 <!-- ouverture du footer -->  
<?php require_once('../template//partial/footer.php');?>