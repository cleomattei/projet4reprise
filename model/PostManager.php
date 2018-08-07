<?php
namespace CleoMattei\Projet4\Model;
/* __________________________________________________________________________________________________________________________________________________________________

REGROUP ALL FUNCTION FOR POSTS

__________________________________________________________________________________________________________________________________________________________________ */
require_once('model/Manager.php');
class PostManager extends \CleoMattei\Projet4\Model\Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT posts.id, posts.title, posts.content, DATE_FORMAT(posts.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr,
        categories.title AS category_title
        FROM posts 
        LEFT JOIN categories ON posts.category_id = categories.id
        ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getAdminPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT posts.id, posts.title, posts.content, DATE_FORMAT(posts.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr,
        categories.title AS category_title,
        count(comments.id) AS count_comments
        FROM posts 
        LEFT JOIN categories ON posts.category_id = categories.id
        INNER JOIN comments ON comments.post_id = posts.id
        GROUP BY posts.id
        ORDER BY creation_date DESC');

        return $req;
    }

    public function allChapters()
    {
        
        $db = $this->dbConnect();
        $req = $db->query(
            'SELECT posts.id, posts.title, posts.content, DATE_FORMAT(posts.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, 
            categories.title AS category_title 
            FROM posts 
            LEFT JOIN categories ON posts.category_id = categories.id 
            WHERE posts.category_id=1 ORDER BY creation_date ASC');

        return $req;
    }
    
    public function allEditorial()
    {
        
        $db = $this->dbConnect();
        $req = $db->query('SELECT posts.id, posts.title, posts.content, DATE_FORMAT(posts.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr,
        categories.title AS category_title 
        FROM posts 
        LEFT JOIN categories ON posts.category_id = categories.id 
        WHERE category_id=2 ORDER BY creation_date ASC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT posts.id, posts.title, posts.content, DATE_FORMAT(posts.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr,
        categories.title AS category_title 
        FROM posts 
        LEFT JOIN categories ON posts.category_id = categories.id 
        WHERE posts.id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
     public function getExtrait($post, $lenght = NULL){
        if($lenght === NULL){
            $lenght = 350;
        }
        $html = '<p>' . substr($post['content'], 0, $lenght) . '...</p>'; //substr = nombre de caractères à afficher
        $html .= '<p><em><a href="?page=post&id='.$post['id'].'">Voir la suite</a></em></p>';
        return $html;
    }

    public function updatePost($postId, $title, $content) // on modifie un post
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE `posts` SET `title` = ?, `content` = ? WHERE id = ?');
        $affectedLines = $req->execute(array($title, $content, $postId));

        return $affectedLines;
    }

    public function deletePost($postId) // on supprime un post
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM `posts` WHERE `id` = ?');
        $affectedLines = $req->execute(array($postId));

        return $affectedLines;
    }

}