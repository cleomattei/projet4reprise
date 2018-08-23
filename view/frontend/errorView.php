<?php ob_start(); ?>
    <figure>
        <img src="/oc/projet4/public/images/iceberg_titanic.jpg" alt="dessin humoristique d'un iceberg détruisant le titanic"/>
        <figcaption>
            Une erreur s'est produite :
            <?= $errorMessage ?>
        </figcaption>
    </figure>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>