<?php 
namespace App\Core;

class databaseConfiguration  
{
    private $host;
    private $name;
    private $user;
    private $password;

    public function __construct(string $host, string $name, String $user, string $password)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;

    }

    public function getSource()
    {
        return "mysql:host={$this->host};dbname={$this->name}";
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getPassword()
    {
        return $this->password;
    }
}




?>