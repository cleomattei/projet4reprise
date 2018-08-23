<?php ob_start(); ?>

<div class="row bg-white space-padding-top">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <img alt="portrait de jean forteroche" src="/oc/projet4/public/images/portrait_jean_forteroche.jpg" />

    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2 class="pol-shadows"><?= $introduction['title'] ; ?></h2>

        <?= $introduction['content'] ; ?>

    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
