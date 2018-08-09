<?php $title = 'Administration'; ?>
<?php ob_start(); ?>
<?= $message ; ?>
    <p class="color-fauve"> Êtes-vous sûr de vouloir supprimer le commentaire de <?= $comment['author'] ; ?> ?</p>
<a class="btn btn-primary" href="?page=deleteComment&id=<?= $comment['id']; ?>&ok=1">Supprimer</a>
<a class="btn btn-danger" href="admin.php">Annuler</a>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>