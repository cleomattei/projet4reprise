<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

require('controller/frontend.php');

try { // On essaie de faire des choses
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['page'] == 'listChapters') {
            allChapters();
        }
        elseif ($_GET['page'] == 'listEditorial') {
            allEditorial();
        }
        elseif ($_GET['page'] == 'jeanForteroche') {
            home();
        }
        elseif ($_GET['page'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['page'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['page'] == 'reportComment') {
	        if (isset($_GET['id']) && $_GET['id'] > 0) {
		        reportComment($_GET['id']);
	        }
	        else {
		        // Autre exception
		        throw new Exception('Aucun identifiant de commentaire envoyé');
	        }
        }
        elseif ($_GET['page'] == 'login'){
           login();
        }
        elseif ($_GET['page'] == 'connect'){
           connectUser($_POST['username'], $_POST['password']);
        }
        elseif ($_GET['page'] == 'contact') {
           contact();
        }
        else {
            throw new Exception('Page introuvable !');
        }
        
    }
    else {
        listPosts();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}