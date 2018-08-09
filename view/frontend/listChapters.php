<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

<section id="allChapters">
    <div class="row justify-content-center">

        <?php while ($post = $posts->fetch()){
                ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg-white">
            <h2 class="<?= $post['category_title'];?>">
                <a href="index.php?page=post&id=<?=$post['id']?>">
                    <i class="fab fa-first-order"></i>
                    <?= $post['title']; ?>
                </a>
            </h2>
            <p><em><?= $post['category_id']; ?></em></p>
            <div><?= $postManager->getExtrait($post, 800); ?> </div>
            <p><em class="dataPostBlog">le <?=$post['creation_date_fr'];?></em></p>
            <a href="index.php?page=post&id=<?=$post['id'];?>" class="btn btn-primary learn-more">Lire la suite</a>

        </div>
        <?php }?>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('../template/template.php'); ?>