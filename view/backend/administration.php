<?php ob_start(); ?>

    <section id="administration" class="bg-white">
        <h1>Admin</h1>
        <h2>Introduction</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Titre</th>
                <th class="text-right" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= $introduction['title'] ;?></td>
                <td class="text-right">
                    <a class="btn btn-primary" href="?page=editIntroduction">Modifier</a>
                </td>
            </tr>
            </tbody>
        </table>
        <h2>Chapitres</h2>
        <a href="?page=addChapter"><button class="btn btn-success space-margin-bot">Ajouter</button></a>
        
        <table class="table table-striped table-hover table-responsive table-admin">
            <thead class="thead-dark">
            <tr>

                <th scope="col">Titre</th>
                <th scope="col">Nb. Commentaires</th>
                <th class="text-right" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($post = $posts->fetch()){ ?>
                <tr>

                    <td><?= $post['title'] ;?></td>
                    <td><?= $post['count_comments'] ; ?></td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="?page=editChapter&id=<?= $post['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                        <a class="button-right-space btn btn-danger" href="?page=deleteChapter&id=<?= $post['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h2>Commentaires</h2>

        <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark">
            <tr>

                <th scope="col">Auteur</th>
                <th scope="col">Commentaire</th>
                <th class="text-right" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($comment = $comments->fetch()){ ?>
                <tr>

                    <td><?= $comment['author'] ; ?></td>
                    <td><?= $comment['comment'] ; ?></td>
                    <td class="row text-right">
                        <a class="btn btn-danger" href="?page=editComment&id=<?= $comment['post_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                        <?php if($comment['report'] == 1) { ?>
                            <a class="button-right-space btn btn-primary" href="?page=editComment&id=<?= $comment['post_id']; ?>"><i class="fas fa-bell-slash fa-xs"></i></a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>