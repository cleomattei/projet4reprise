
<?php $title = 'Ajout d\'un chapitre'; ?>
<?php ob_start(); ?>

<?= $message ; ?>
<form method="post">
    <div class="form-group">
        <input type="text" id="title" class="form-control" name="title" placeholder="Titre"/>
    </div>
    <div class="form-group">
        <textarea id="content" class="form-control" name="content"></textarea>
    </div>
    <div class="form-group">
        <select id="category" name="category" class="form-control">
            <?php while ($category = $categories->fetch()){ ?>
            <option value="<?= $category['id'] ; ?>"><?= $category['title'] ; ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="Valider" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>