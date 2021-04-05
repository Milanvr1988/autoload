<?php
namespace App\bootstrap;

require "vendor/autoload.php";

use App\Controller\mainController;
use App\Core\databaseConfiguration;
use App\Core\databaseConnection;

$databaseConfiguration = new databaseConfiguration("localhost","vesovic","vesovic","kurs");
$databaseConnection = new databaseConnection($databaseConfiguration);
$email = new mainController($databaseConnection);



?>
