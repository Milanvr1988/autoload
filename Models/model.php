<?php
namespace App\Models;
use App\Core\databaseConnection;
use PDO;

class model
{
    private $con;

    public function __construct( databaseConnection & $con )
    {
        $this->con = $con;
    }

    public function getEmail()
    {
        $sql = "SELECT * FROM email";
        $query = $this->con->getConnection()->prepare($sql);
        $query->execute();
        $result = $query->fetchall(PDO::FETCH_OBJ);

        return $result;

    }
}
























?>
