<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>
<?php if($post['category_title'] == 'Roman') { ?>
    <img class="img-Chapter space-margin-bot" src="/oc/projet4/public/images/wolf.jpg" alt="photo d'un loup brun couché sur un rocher"/>
<?php } ?>

<?php if($post['category_title'] == 'Editorial') { ?>
    <div class="row bg-white">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">
            <h2><?=$post['title'] ; ?></h2>
            <p><?=$post['content'] ;?></p>
            <p><em class="dataPostBlog">le <?= $post['creation_date_fr'] ?></em></p>
        </div>
    </div>
<?php } else { ?>
    <h1 class="color-fauve"><?= htmlspecialchars($post['title']) ?></h1>
    
    <div class="row justify-content-center <?php if($post['category_title'] == 'Editorial') echo 'bg-white' ; ?>">
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">

            <div class="type-roman">
                <?= nl2br(($post['content'])) ?>

                <p><em class="dataPostBlogView">le <?= $post['creation_date_fr'] ?></em></p>
            </div>
        </div>
    </div>

<?php }?>
    <div class="row bg-white">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Commentaires</h3>
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
        <div class="bg-white">

            <p><strong><?=htmlspecialchars($comment['author']) ?></strong></p>
            <?= nl2br(($comment['comment'])) ?>
            <a href="index.php?page=reportComment&id=<?= $comment['id'];?>" class="btn btn-danger learn-more"><i class="fas fa-flag"></i></a>
            <p><em class="dataPostBlog"> le <?= $comment['comment_date_fr'] ?></em></p>

        </div>
        <?php
    }
    ?>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
