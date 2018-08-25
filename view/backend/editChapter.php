<?php ob_start(); ?>

<?= $message ; ?>
<div class="row bg-white">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form method="post">
    <div class="form-group">
        <input type="text" id="title" class="form-control" name="title" value="<?php echo $post['title'] ; ?>"/>
    </div>
    <div class="form-group">
        <textarea id="content" class="form-control" name="content"><?= $post['content']  ; ?></textarea>
    </div>
    <div class="form-group">
        <select id="category" name="category" class="form-control">
            <?php while ($category = $categories->fetch()){ ?>
                <option value="<?= $category['id'] ; ?>"><?= $category['title'] ; ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="submit" class="btn btn-primary"/>
    </div>
</form>
    </div>
</div>
<div class="row bg-white">
<h2>Commentaires associés</h2>

<table class="table table-striped table-hover table-responsive table-admin">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Auteur</th>
        <th scope="col">Commentaire</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($comment = $comments->fetch()){ ?>
        <tr class="color-fauve">
            <th scope="row"><?= $comment['id']; ?></th>
            <td><?= $comment['author'] ;?></td>
            <td><?= $comment['comment'] ; ?></td>
            <td>
                <a class="btn btn-danger" href="?page=deleteComment&id=<?= $comment['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                <?php if($comment['report'] == 1) { ?>
                    <a class="btn btn-primary" href="?page=unReportComment&id=<?= $comment['id']; ?>"><i class="fas fa-bell-slash"></i></a>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>