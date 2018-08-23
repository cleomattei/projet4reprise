<?php ob_start(); ?>

<?= $message ; ?>
<div class="row bg-white">
    <h2><?=$post['title']; ?></h2>
    <p><?=$postManager->getExtrait($post, 800); ?></p>
</div>


<div class="row bg-white">
<table class="table table-striped table-hover table-responsive table-admin">
    <h2>Commentaires associés</h2>
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
        <tr>
            <th scope="row"><?= $comment['id']; ?></th>
            <td><?= $comment['author'] ;?></td>
            <td><?= $comment['comment'] ; ?></td>
            <td>
                <a class="btn btn-danger" href="?page=deleteComment&id=<?= $comment['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                <?php if($comment['report'] == 1) { ?>
                    <a class="btn btn-primary" href="?page=unReportComment&id=<?= $comment['id']; ?>"><i class="fas fa-bell-slash fa-xs"></i></a>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>