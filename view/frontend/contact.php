
<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

<?= $message ; ?>
<section id="contact" class="bg-white">


            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group">

                        <input type="text" class="form-control" id="" placeholder=" Nom">
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                    </div>

                </div>
                <div class="col-md-6">
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