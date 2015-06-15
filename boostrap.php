<?php

require_once __DIR__.'/vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(
    [__DIR__."/config/mapping"],
    $isDevMode
);

// Mysql
//$connectionParams = [
//    'dbname' => 'doctrine_playground',
//    'user' => 'root',
//    'password' => '',
//    'host' => 'localhost',
//    'driver' => 'pdo_mysql',
//];

// sqlite
$connectionParams = [
    'url' => 'sqlite://var/db.sqlite',
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$entityManager = EntityManager::create($conn, $config);
