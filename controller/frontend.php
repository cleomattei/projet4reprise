<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/IntroductionManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');


function listPosts()
{
    $postManager = new  \CleoMattei\Projet4\Model\PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    $introductionManager = new  \CleoMattei\Projet4\Model\IntroductionManager(); // Création d'un objet
    $introduction = $introductionManager->getIntroduction(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}


function allChapters()
{
    $postManager = new  \CleoMattei\Projet4\Model\PostManager(); // Création d'un objet
    $posts = $postManager->allChapters(); // Appel d'une fonction de cet objet

    require('view/frontend/listChapters.php');
}

function allEditorial()
{
    $postManager = new  \CleoMattei\Projet4\Model\PostManager(); // Création d'un objet
    $posts = $postManager->allEditorial(); // Appel d'une fonction de cet objet

    require('view/frontend/listEditorial.php');
}

function post()
{
    $postManager = new \CleoMattei\Projet4\Model\PostManager();
    $commentManager = new \CleoMattei\Projet4\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \CleoMattei\Projet4\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function reportComment($commentId)
{
	$commentManager = new \CleoMattei\Projet4\Model\CommentManager();
	$affectedLines = $commentManager->reportOneComment($commentId);
	
	if ($affectedLines === false) {
		throw new Exception('Impossible de signaler le commentaire !');
	}
	else {
        require('view/frontend/reportComment.php');
	}
}

function login()
{
    require('view/frontend/login.php');
}

function connectUser($username, $password)
{
    $userManager = new \CleoMattei\Projet4\Model\UserManager() ; // création de l'objet UserManager
    $connexion = $userManager->getUser($username, $password);

    if($connexion != false) {
        header('Location: admin.php');
    } else {
        $message = 'Identifiants incorrects' ; 
        require('view/frontend/login.php');
    } 
        
    
}
function home()
{
    $introductionManager = new  \CleoMattei\Projet4\Model\IntroductionManager(); // Création d'un objet
    $introduction = $introductionManager->getIntroduction(); // Appel d'une fonction de cet objet
    require('view/frontend/jeanForteroche.php');
}
function contact()
{
    require('view/frontend/contact.php');
}