
<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

<?= $message ; ?>

<section id="contact" >
    <h2 class="color-fauve title-blog">Contact</h2>

            <form class="bg-white">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-line">
                    <div class="form-group">

                        <input type="text" class="form-control" id="name-contact" placeholder=" Nom">
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">

                        <textarea  class="form-control" id="description" placeholder=" Message"></textarea>
                    </div>
                    <div>

                        <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer</button>
                    </div>

                </div>
            </form>

</section>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>