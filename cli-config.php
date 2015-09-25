<?php
// bootstrap.php
require_once "vendor/autoload.php";


use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\Type;

//$paths = array("module\\Application\\src\\Application\\Entity");
$paths = array("module\\Application\\src\\Voyage\\AdminBundle\\Entity");
$isDevMode = true;

// the connection configuration

Doctrine\DBAL\Types\Type::addType('json', 'Sonata\Doctrine\Types\JsonType');

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'dev',
    'password' => '123456',
    'dbname'   => 'viweb_dev_voyage',
    'host' => '10.0.0.2',
    
);
//$redis = new Redis();
//$redis->connect('www.visualweber.net', 6379);
//
//$cacheDriver = new \Doctrine\Common\Cache\RedisCache();
//$cacheDriver->setRedis($redis);
$cacheDriver = new Doctrine\Common\Cache\ArrayCache();
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode,$paths,null,false);
//$config->setMetadataCacheImpl($cacheDriver);
$entityManager = EntityManager::create($dbParams, $config);


return ConsoleRunner::createHelperSet($entityManager);
?>