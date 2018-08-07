<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

<img class="image-intro" src="../../public/images/fonds-ecran-antarctique.jpg"/>
<section id="allChapters">
    <h1 class="color-glacier">Livre complet chapitre par chapitre</h1>
    <div class="row justify-content-center">

        <?php while ($post = $posts->fetch()){
                ?>
        <div id="jumbotronChapters" class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <h2 class="<?= $post['category_title'];?>">
                <a href="index.php?page=post&id=<?=$post['id']?>">
                    <?= $post['title']; ?>
                </a>
            </h2>
            <p><em><?= $post['category_id']; ?></em></p>
            <p>
                <?= $postManager->getExtrait($post, 200); ?>
            </p>
        </div>
        <?php }?>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
