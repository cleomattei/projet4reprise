<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/IntroductionManager.php');
require_once('model/CategoryManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function admin() {
    // on récupère l'ensemble des posts
    $postManager = new  \CleoMattei\Projet4\Model\PostManager(); // Création d'un objet Post
    $posts = $postManager->getAdminPosts(); // Appel d'une fonction de cet objet

    // on récupère l'ensemble des commentaires
    $commentManager = new  \CleoMattei\Projet4\Model\CommentManager(); // Création d'un objet Commentaire
    $comments = $commentManager->getAllComments(); // Appel d'une fonction de cet objet


    // on récupère l'introduction
    $introductionManager = new  \CleoMattei\Projet4\Model\IntroductionManager(); // Création d'un objet Commentaire
    $introduction = $introductionManager->getIntroduction();

    require('view/backend/administration.php');
}

function logout(){
    unset($_SESSION['auth']) ; 
    header('Location: index.php?page=jeanForteroche');
}

function editChapter($id) {
    $postManager = new \CleoMattei\Projet4\Model\PostManager() ;
    $post = $postManager->getPost($id) ;

    $commentManager = new  \CleoMattei\Projet4\Model\CommentManager(); // Création d'un objet Commentaire
    $comments = $commentManager->getComments($id); // Appel d'une fonction de cet objet

    $categorytManager = new \CleoMattei\Projet4\Model\CategoryManager();
    $categories = $categorytManager->getCategories();


    if(!empty($_POST)){
        $result = $postManager->updatePost($_GET['id'], $_POST['title'], $_POST['content'], $_POST['category']);
        if($result) {
            header('Location: admin.php');
        } else {
            $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
        }
    }

    require('view/backend/editChapter.php');
}

function editComment($id) {
    $postManager = new \CleoMattei\Projet4\Model\PostManager() ;
    $post = $postManager->getPost($id) ;

    $commentManager = new  \CleoMattei\Projet4\Model\CommentManager(); // Création d'un objet Commentaire
    $comments = $commentManager->getComments($id); // Appel d'une fonction de cet objet

    require('view/backend/editComment.php');
}

function deleteChapter($id)
{
    $postManager = new \CleoMattei\Projet4\Model\PostManager();
    $post = $postManager->getPost($id);
    $commentManager = new \CleoMattei\Projet4\Model\CommentManager();

    if(isset($_GET['ok']) && $_GET['ok'] == 1) {
        $result = $postManager->deletePost($_GET['id']) ;
        $commentManager->deleteComment($_GET['id']);
        if($result) {
            header('Location: admin.php');
        } else {
            $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
        }
    }

    require('view/backend/deleteChapter.php');
}

function deleteComment($id)
{
    $commentManager = new \CleoMattei\Projet4\Model\CommentManager();
    $comment = $commentManager->getOneComment($id);

    if(isset($_GET['ok']) && $_GET['ok'] == 1) {
        $result = $commentManager->deleteOneComment($_GET['id']) ;

        if($result) {
            header('Location: admin.php');
        } else {
            $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
        }
    }

    require('view/backend/deleteComment.php');
}


function unReportComment($id)
{
    $commentManager = new \CleoMattei\Projet4\Model\CommentManager();
    $comment = $commentManager->getOneComment($id);

    $result = $commentManager->unReportOneComment($_GET['id']) ;

    if($result) {
        header('Location: admin.php');
    } else {
        $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
    }
}

function addChapter() {
    $postManager = new \CleoMattei\Projet4\Model\PostManager();
    $categorytManager = new \CleoMattei\Projet4\Model\CategoryManager();
    $categories = $categorytManager->getCategories();

    if(!empty($_POST)){
        $result = $postManager->postPost($_POST['title'], $_POST['content'], $_POST['category']);
        if($result) {
            header('Location: admin.php');
        } else {
            $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
        }
    }

    require('view/backend/addChapter.php');
}

function editIntroduction() {
    $introductionManager = new \CleoMattei\Projet4\Model\IntroductionManager();
    $introduction = $introductionManager->getIntroduction();

    if(!empty($_POST)){
        $result = $introductionManager->updateIntroduction($_POST['title'], $_POST['content']);
        if($result) {
            header('Location: admin.php');
        } else {
            $message = "<div class='alert alert-danger'>Une erreur s'est produite !</div>" ;
        }
    }

    require('view/backend/editIntroduction.php');
}