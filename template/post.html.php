<div class="post mt-3">
    <h3><?= $post['title'] ?></h3>
    <p><?= $post['content'] ?></p>
    <a href="delete-post.php?id=<?= $post['id'] ?>" class="btn btn-danger">supprimer</a>
    <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-warning">Update</a>
    <a href="index.php" class="btn btn-success">retour</a>
</div>
<h4> commentaire</h4>
<form action="create-commentaire.php" method="post">
    <input type="hidden" name="$commentaire_id" value="<?= $post['id'] ?>">
    <input type="text" name="commentaire" id="">
    <input type="submit" value="Envoyer">
</form>
<br>
<?php foreach ($commentaires as $commentaire) :  ?>
    <p class="bg-info-subtle"><?= $commentaire["commentaire"] ?></p>
<?php endforeach; ?>
<p></p>
