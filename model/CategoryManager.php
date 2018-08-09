<?php
namespace CleoMattei\Projet4\Model;
/* __________________________________________________________________________________________________________________________________________________________________

REGROUP ALL FUNCTION FOR POSTS

__________________________________________________________________________________________________________________________________________________________________ */
require_once('model/Manager.php');
class CategoryManager extends \CleoMattei\Projet4\Model\Manager
{
    public function getCategories()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title
        FROM categories');

        return $req;
    }
}