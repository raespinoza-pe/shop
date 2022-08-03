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

//print_r($conn);

$sql = "SELECT * FROM producto_moto where id = 1";
$stmt = conextion()->query($sql);

/*$row = $stmt->fetchAllAssociative();
	print_r ( $row);*/

while (($row = $stmt->fetchAssociative()) !== false) {
    echo $row['modelo'] . "\n";
}

	//print_r ( $stmt);