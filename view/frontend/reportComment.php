<?php ob_start(); ?>
<div class="bg-white">
    <p class="color-fauve"> Le commentaire a bien été signalé.</p>
    <a href="index.php" class="btn btn-primary">Retour au blog</a>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>