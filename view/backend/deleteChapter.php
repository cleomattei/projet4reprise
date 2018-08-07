<?php $title = 'Administration'; ?>
<?php ob_start(); ?>
<?= $message ; ?>
<p class="color-fauve"> Êtes-vous sûr de vouloir supprimer le chapitre <?= $post['title'] ; ?> et les commentaires associés ? </p>
<a class="btn btn-primary" href="?page=deleteChapter&id=<?= $post['id']; ?>&ok=1">Supprimer</a>
<a class="btn btn-danger" href="admin.php">Annuler</a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>