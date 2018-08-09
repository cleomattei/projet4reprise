<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>


<section>
    <h2 class="color-fauve">Tous les Editoriaux</h2>
    <div class="row justify-content-center">

        <?php while ($post = $posts->fetch()){
                ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg-white">
            <h2>
                <a href="index.php?page=post&id=<?=$post['id']?>" class="<?= $post['category_title'];?>">
                    <?= $post['title']; ?>
                </a>
            </h2>
            <p><em><?= $post['category_id']; ?></em></p>
            <p><?=$post['content']; ?> </p>
            <p><em class="dataPostBlog">le <?=$post['creation_date_fr'] ?></em></p>
            <button class="btn btn-primary learn-more"><a>Voir les commentaires <i class="fas fa-angle-double-right"></i></a></button>
        </div>
        <?php }?>
    </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
