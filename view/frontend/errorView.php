<?php $title = 'Mon blog'; ?>
      <?php ob_start(); ?>
<figure>
<img src="../../public/images/iceberg_titanic.jpg" alt="dessin humoristique d'un iceberg détruisant le titanic"/>
<figcaption>Une erreur s'est produite :</figcaption>
<?= $errorMessage ?>
</figure>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>