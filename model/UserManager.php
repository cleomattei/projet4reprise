<?php
namespace CleoMattei\Projet4\Model;
/* __________________________________________________________________________________________________________________________________________________________________

CONNECT AND DISCONNECT USERS
__________________________________________________________________________________________________________________________________________________________________ */

require_once('model/Manager.php');
class UserManager extends \CleoMattei\Projet4\Model\Manager
{
    public function getUser($username, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, username, password FROM users WHERE username = ?');
        $req->execute(array($username));
        $user = $req->fetch();
        
        if($user !== null) {
            if(hash_equals($user['password'], crypt($password, 'R5f5BaUFiy55P92Kupi22YGj'))) {
                $_SESSION['auth'] = $user['id'];
                return true ;  
            } else {
                return false ; 
            }
        }
    }
}