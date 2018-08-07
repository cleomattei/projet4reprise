<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>
<img class="image-intro" src="../../public/images/wolf.jpg" alt="photo d'un loup brun couché sur un rocher"/>
<h1 class="color-fauve"><?= htmlspecialchars($post['title']) ?></h1>
<section id="postAlone">


    <div class="row justify-content-center">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">

            <div class="type-roman">
                <?= nl2br(($post['content'])) ?>
            </div>
            <em>le <?= $post['creation_date_fr'] ?></em>'
        </div>
    </div>


    <div class="row allChapter">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="color-glacier">Commentaires</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="index.php?page=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <div class="form-group">

                    <input class="form-control" type="text" id="author" name="author" placeholder="Pseudo" />
                </div>
                <div class="form-group">

                    <textarea class="form-control" id="comment" name="comment" placeholder="Message"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

    <?php
    while ($comment = $comments->fetch())
    {
        ?>
        <div class="row jumbotronComment">

            <p><strong><?= htmlspecialchars($comment['author']) ?></strong>
            </p>
            <p>
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
            <em>le
                <?= $comment['comment_date_fr'] ?></em>
        </div>
        <?php
    }
    ?>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
