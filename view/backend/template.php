<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog de l'écrivain Jean Forteroche">
    <meta name="author" content="Jean Forteroche">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog de Jean Forteroche</title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="/oc/projet4/public/css/style.css">
    <link href="/oc/projet4/public/css/tablette.css" rel="stylesheet">
    <link href="/oc/projet4/public/css/smartphone.css" rel="stylesheet" media="screen and (max-width: 768px)">
    <!-- appel la police d'écriture -->
    <link href="https://fonts.googleapis.com/css?family=Modern+AntiquaRaleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <!-- icone -->
    <link rel="icon" href="/oc/projet4/public/images/signature_jean_forteroche_transparent.png"/>
    <!-- appel à la police font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>

<body class="body<?php if($_GET['page'] == 'post') echo 'Black' ;?>">

<section id="page-title">
    <h1 id="book-title" class="pol-shadows">
        Billet simple pour l'Alaska
    </h1>
</section>
<!-- __________________________________________________________________________________________________________________________________________________________________ -->
    <nav class="navbar navbar-expand-md navbar-light bg-light ">
        <a class="navbar-brand" href="index.php?page=jeanForteroche"><img class="img-signature" alt="signature caligraphiée de jean Forteroche" src="/oc/projet4/public/images/signature_jean_forteroche_transparent.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Blog <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
            <a class="nav-link" href="#">Tous les chapitres</a>
          </li>-->

                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php?page=listChapters">Tous les chapitres</a>
                    
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>

                </li>
            </ul>
            
            <?php if(isset($_SESSION['auth'])){ ?>
           
             <form action="admin.php" method="post" class="form-inline my-2 my-lg-0">
                
                <button class="btn btn-primary my-2 my-sm-0" type="submit" ><i class="fas fa-user-cog"></i></button><!-- administration -->
            </form>
            
            
             <form action="admin.php?page=logout" method="post" class="form-inline my-2 my-lg-0">
                
                <button id="bouton-delog" class="btn btn-danger my-2 my-sm-0" type="submit" ><i class="fas fa-user-slash"></i></button><!-- se deconnecter -->
            </form>
            <?php
            }else{

            ?>
            <form action="?page=login" method="post" class="form-inline my-2 my-lg-0">
                <button class="btn btn-dark my-2 my-sm-0" type="submit" ><i class="fas fa-user-circle"></i></button><!-- se connecter -->
            </form>
  <?php }  ?>
        </div>
    </nav>
<!-- __________________________________________________________________________________________________________________________________________________________________ -->

    <main class="container">
        <div class="starter-template" style="padding-top: 100px">
            <?= $content; ?>
        </div>

    </main>

<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="text-center social-icon">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g fa-2x"></i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                        <i class="fab fa-pinterest-p fa-2x"></i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright :
        <a href="">cleomattei.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- __________________________________________________________________________________________________________________________________________________________________ -->
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
<script src="/oc/projet4/public/js/snow.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    
    <!-- CDN TINYMCE -->
    <script src="/oc/projet4/public/js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea',
        language: 'fr_FR'
    });
    </script>
    <!-- Appel javascript min -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
     <script src="/oc/projet4/public/js/diaporama.js"></script>
</body>

</html>
