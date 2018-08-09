<?php $title = 'Administration'; ?>
<?php ob_start(); ?>


    <section id="administration" class="bg-white" ">
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
        <tr class="trash-border">

            <th scope="col">Titre</th>
            <th scope="col">Nb. Commentaires</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($post = $posts->fetch()){ ?>
            <tr class="trash-border">

                <td><?= $post['title'] ;?></td>
                <td><?= $post['count_comments'] ; ?></td>
                <td>
                    <a class="btn btn-primary" href="?page=editChapter&id=<?= $post['id']; ?>"><i class="fas fa-pencil-alt fa-lg"></i></a>
                    <a class="btn btn-danger" href="?page=deleteChapter&id=<?= $post['id']; ?>"><i class="fas fa-trash-alt fa-lg"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h2>Commentaires</h2>

    <table class="table">
        <thead>
        <tr class="trash-border">

            <th scope="col">Auteur</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($comment = $comments->fetch()){ ?>
            <tr >

                <td><?= $comment['author'] ; ?></td>
                <td><?= $comment['comment'] ; ?></td>
                <td class="trash-border">
                    <a class="btn btn-danger" href="?page=editComment&id=<?= $comment['post_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                    <?php if($comment['report'] == 1) { ?>
                        <a class="btn btn-primary" href="?page=editComment&id=<?= $comment['post_id']; ?>"><i class="fas fa-bell-slash fa-xs"></i></a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>