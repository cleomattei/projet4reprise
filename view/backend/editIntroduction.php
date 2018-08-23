<?php ob_start(); ?>

<?= $message ; ?>
<form method="post">
    <div class="form-group">
        <input type="text" id="title" class="form-control" name="title" value="<?php echo $introduction['title'] ; ?>"/>
    </div>
    <div class="form-group">
        <textarea id="content" class="form-control" name="content"><?= $introduction['content']  ; ?></textarea>
    </div>
    <div>
        <input type="submit" class="btn btn-primary"/>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>