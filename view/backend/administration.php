<?php $title = 'Administration'; ?>
<?php ob_start(); ?>


<section id="">
    <h1 class="color-glacier">Administration</h1>
    <button class="btn btn-success space-margin-bot">Ajouter</button>
    <h2 class="color-glacier">Chapitres</h2>

    <a class="btn btn-primary" href="?page=addChapter">Nouveau chapitre</a>
    <table class="table">
        <thead>
            <tr class="color-glacier">
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Nb. Comment.</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($post = $posts->fetch()){ ?>
                <tr class="color-fauve">
                    <th scope="row"><?= $post['id']; ?></th>
                    <td><?= $post['title'] ;?></td>
                    <td><?= $post['count_comments'] ; ?></td>
                    <td>
                        <a class="btn btn-primary" href="?page=editChapter&id=<?= $post['id']; ?>">Modifier</a>
                        <a class="btn btn-danger" href="?page=deleteChapter&id=<?= $post['id']; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="color-glacier">Commentaires</h2>

    <table class="table">
        <thead>
        <tr class="color-glacier">
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
                    <a class="btn btn-danger" href="?page=editChapter&id=<?= $comment['post_id']; ?>">Supprimer</a>
                    <?php if($comment['report'] == 1) { ?>
                        <a class="btn btn-primary" href="?page=editChapter&id=<?= $comment['post_id']; ?>">Enlever le signalement</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>