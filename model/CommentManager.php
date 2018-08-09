<?php
namespace CleoMattei\Projet4\Model;

/* __________________________________________________________________________________________________________________________________________________________________

REGROUP ALL FUNCTION FOR COMMENTS

__________________________________________________________________________________________________________________________________________________________________ */
require_once('model/Manager.php');
class CommentManager extends \CleoMattei\Projet4\Model\Manager
{
    public function getAllComments() // on récupère TOUS les commentaires
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, author, comment, report, post_id, lu, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments ORDER BY comment_date DESC');

        return $comments;
    }
    
    public function getComments($postId) // on récupère les commentaires d'UN post 
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, report, post_id, lu, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getOneComment($commentId) // on récupère les commentaires d'UN post
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, report, post_id, lu, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ? ORDER BY comment_date DESC');
        $comments->execute(array($commentId));
        $comments = $comments->fetch();

        return $comments;
    }

    public function postComment($postId, $author, $comment) // on insère un commentaire
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function reportOneComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE `comments` SET `report` = 1 WHERE id = ?');
        $affectedLines = $req->execute(array($commentId));

        return $affectedLines;
    }

    public function unReportOneComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE `comments` SET `report` = 0 WHERE id = ?');
        $affectedLines = $req->execute(array($commentId));

        return $affectedLines;
    }

    public function deleteComment($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('DELETE FROM `comments` WHERE post_id = ?');
        $affectedLines = $comments->execute(array($postId));

        return $affectedLines;
    }

    public function deleteOneComment($commentId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('DELETE FROM `comments` WHERE id = ?');
        $affectedLines = $comments->execute(array($commentId));

        return $affectedLines;
    }
	
	public function readAllComment($commentId)
	{
		$db = $this->dbConnect();
		$req = $db->query('UPDATE `comments` SET `read` = 1');
		
		return $req;
	}
}