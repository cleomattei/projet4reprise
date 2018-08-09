<?php $title = 'Administration'; ?>
<?php ob_start(); ?>


    <section class="bg-white" ">
    <h1>Administration</h1>
    <h2 >Introduction</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $introduction['title'] ;?></td>
            <td>
                <a class="btn btn-primary" href="?page=editIntroduction">Modifier</a>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 >Chapitres</h2>
    <a href="?page=addChapter"><button class="btn btn-success space-margin-bot">Ajouter</button></a>


    <table class="table">
        <thead>
        <tr>

            <th scope="col">Titre</th>
            <th scope="col">Nb. Comment.</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($post = $posts->fetch()){ ?>
            <tr >

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

    <h2>Commentaires</h2>

    <table class="table">
        <thead>
        <tr >

            <th scope="col">Auteur</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($comment = $comments->fetch()){ ?>
            <tr >

                <td><?= $comment['author'] ;?></td>
                <td><?= $comment['comment'] ; ?></td>
                <td>
                    <a class="btn btn-danger" href="?page=editComment&id=<?= $comment['post_id']; ?>">Supprimer</a>
                    <?php if($comment['report'] == 1) { ?>
                        <a class="btn btn-primary" href="?page=editComment&id=<?= $comment['post_id']; ?>">Enlever le signalement</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>