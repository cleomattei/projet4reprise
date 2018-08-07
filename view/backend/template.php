<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?=$title; ?></title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="/public/css/style.css">
    <!-- appel la police d'écriture -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- appel au css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tablette.css" rel="stylesheet">
    <link href="css/smartphone.css" rel="stylesheet">

    <!-- icone -->
    <link rel="icon" href="asset/images/logo-velo.png" />
    <!-- appel à la police font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>
<!-- __________________________________________________________________________________________________________________________________________________________________ -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php?page=jeanForteroche">Jean Forteroche</a>
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
            </ul>
           
             <form action="admin.php" method="post" class="form-inline my-2 my-lg-0">
                
                <button class="btn btn-primary my-2 my-sm-0" type="submit" >Administration</button>
            </form>
            
            
             <form action="admin.php?page=logout" method="post" class="form-inline my-2 my-lg-0">
                
                <button id="bouton-delog"class="btn btn-danger my-2 my-sm-0" type="submit" >Se déconnecter</button>
            </form>

        </div>
    </nav>
<!-- __________________________________________________________________________________________________________________________________________________________________ -->

    <main role="main" class="container">
        <img id="background_image" src="/public/images/fonds-ecran-antarctique.jpg"/>
        <div class="starter-template" style="padding-top: 100px">
            <?= $content; ?>
        </div>

    </main>
<!-- __________________________________________________________________________________________________________________________________________________________________ -->
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
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
    
     <script src="/public/js/diaporama.js"></script>
</body>

</html>
