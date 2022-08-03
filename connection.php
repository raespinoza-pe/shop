<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

function conextion()
{
    $connectionParams = array(
        'dbname' => 'jmr',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    );

    $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

    return $conn;
}
?>