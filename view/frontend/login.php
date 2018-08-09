
<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

<?= $message ; ?>
<form action="index.php?page=connect" method="post">
    <div class="form-group">

        <input type="text" class="form-control" id="username" name="username" placeholder="Pseudo"/>
    </div>
    <div class="form-group">

        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe"/>
    </div>
    <div>
        <input type="submit" class="btn btn-primary"/>
    </div>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>