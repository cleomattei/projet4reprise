<?php
    namespace CleoMattei\Projet4\Model;
/* __________________________________________________________________________________________________________________________________________________________________

REGROUP ALL FUNCTION FOR POSTS

__________________________________________________________________________________________________________________________________________________________________ */
require_once('model/Manager.php');
class IntroductionManager extends \CleoMattei\Projet4\Model\Manager
{
    public function getIntroduction()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT title, content FROM introduction');
        $introduction = $req->fetch();
        return $introduction;
    }

    public function updateIntroduction($title, $content) // on modifie l'introduction
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE `introduction` SET `title` = ?, `content` = ?');
        $affectedLines = $req->execute(array($title, $content));

        return $affectedLines;
    }

    public function getExtrait($introduction, $lenght = NULL){
        if($lenght === NULL){
            $lenght = 350;
        }
        $html = '<p>' . substr($introduction['content'], 0, $lenght) . '...</p>'; //substr = nombre de caractères à afficher

        return $html;
    }
}