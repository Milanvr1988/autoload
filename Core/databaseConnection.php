<?php
namespace App\Core;



class databaseConnection
{
    private $config;
    private $connection;

    public function __construct( databaseConfiguration $db )
    {
        $this->config = $db;
    }

    public function getConnection()
    {
      try {
        $this->connection = new \PDO( $this->config->getSource(),
        $this->config->getUser(),
        $this->config->getPassword());

        return $this->connection;

      } catch (\PDOException $e) {
        echo $e->getMessage();
      }


    }
}




?>
