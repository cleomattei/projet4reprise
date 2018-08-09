<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if(!isset($_SESSION['auth'])) {
    header('Location: index.php');
}

require('controller/backend.php');

try { // On essaie de faire des choses
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'logout'){
            logout();
        } else if($_GET['page'] == 'editChapter') {
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                editChapter($_GET['id']) ;
            } else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        } else if($_GET['page'] == 'deleteChapter'){
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                deleteChapter($_GET['id']) ;
            } else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        } else if($_GET['page'] == 'addChapter'){
            addChapter() ;
        } else if($_GET['page'] == 'deleteComment'){
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                deleteComment($_GET['id']) ;
            } else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        } else if($_GET['page'] == 'unReportComment'){
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                unReportComment($_GET['id']) ;
            } else {
                throw new Exception('Aucun identifiant de chapitre envoyé');
            }
        } else if($_GET['page'] == 'editComment') {
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                editComment($_GET['id']);
            }
        } else if($_GET['page'] == 'editIntroduction') {
            editIntroduction() ;
        }
    } else {
        admin();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}