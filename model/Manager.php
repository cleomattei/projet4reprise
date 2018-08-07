<?php
namespace CleoMattei\Projet4\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=livre_jf;charset=utf8', 'root', 'root');
        return $db;
    }
}