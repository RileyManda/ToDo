<?php
// entity-con.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entity"), $isDevMode);
$conn = array(
          'driver'   => 'pdo_mysql',
          'host'     => 'localhost',
          'dbname'   => 'list_db',
          'user'     => 'root',
          'password' => 'Admin2018@$#!',
          'path' => __DIR__ . '/db.sqlite',
);

// Entity manager
$entityManager = EntityManager::create($conn, $config);
