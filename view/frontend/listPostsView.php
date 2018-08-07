<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<img class="image-intro" src="../../public/images/adventure-Alaska.jpg" alt="un homme debout sur un glacier"/>
<section id="blog" class="jumbotronBlog">
    <h1 class="color-glacier space-padding-top">Blog</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md12 col-lg-12">
            <ul>
                <li><a href="index.php?page=listChapters">Roman</a></li>
                <li><a href="index.php?page=listEditorial">Editorial</a></li>
            </ul>
        </div>
    </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php

    while ($data = $posts->fetch())
    {
    ?>
                <div class="jumbotronPostBlog">
                    <h3 class="<?= $data['category_title'];?>">
                        <?= htmlspecialchars($data['title']) ?>
                            
                    </h3>

                    <p>
                        <?= nl2br(($postManager->getExtrait($data,300))) ?>
                            <br />
                            <em><a href="index.php?page=post&id=<?= $data['id'] ?>">Commentaires</a></em>
                    </p>
                    <em class="dataPostBlog">le <?= $data['creation_date_fr'] ?></em>
                </div>

                <?php
    }?>
        </div>
    </div>
</section>
<?php
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
