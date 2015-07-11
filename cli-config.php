<?php
// bootstrap.php
require_once "vendor/autoload.php";


use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("module/Application/src/Application/Entity/");
$isDevMode = false;

// the connection configuration



$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '1234',
    'dbname'   => 'radius',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode,null,null,false);
$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);
?>