<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<section id="blog" class="bg-white">
    <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img id="img-portrait"alt="portrait de jean forteroche" src="/public/images/portrait_jean_forteroche.jpg" />
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h2><?= $introduction['title'] ; ?></h2>
                <?=$introductionManager->getExtrait($introduction, 500) ; ?>

                <a href="index.php?page=jeanForteroche"><button class="btn btn-primary learn-more">Découvrir l'auteur <i class="fas fa-angle-double-right"></i></button></a>
            </div>

    </div>
</section>

<section>

    <div class=" row title-blog">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h2>Derniers billets du blog :</h2>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
                <div class="bg-white">

                    <h3 class="<?= $data['category_title'];?>">
                        <i class="fab fa-first-order"></i>
                        <?= htmlspecialchars($data['title']) ?>

                    </h3>

                    <p><?= nl2br(($postManager->getExtrait($data,300))) ?> </p>
                    <em class="dataPostBlog">le <?= $data['creation_date_fr'] ?></em>
                    <a href="?page=post&id=<?=$data['id']?>"><button class="btn btn-primary learn-more">Lire la suite <i class="fas fa-angle-double-right"></i></button></a>
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
