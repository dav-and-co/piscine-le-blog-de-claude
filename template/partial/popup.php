<html>

    <dialog open>
    <p>Modification de l'article</p>
    <form method="post">
    <input type="text" placeholder=<?php echo $article['title'];?> name="title">
    <input type="text" placeholder=<?php echo $article['content'];?> name="content">
    <input type="text" placeholder=<?php echo $article['date'];?> name="date">


        <button>OK</button>
    </form>
    </dialog>

</html>