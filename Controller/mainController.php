<?php 
namespace App\Controller;
use App\Core\databaseConnection;
use App\Models\model;

class mainController  
{
    private $db;

    public function __construct( databaseConnection & $db )
    {
        $this->db = $db;
    }

    public function home()
    {
        $user = new model($this->db);
        $users = $user->getEmail();
        return $users;
    }
}






?>