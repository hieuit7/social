<?php

/* 
 * Copyright (C) 2015 hieun
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
require_once "vendor/autoload.php";

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

if ( ! file_exists($file = __DIR__.'/vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run this script.');
}

//$loader = require_once $file;
//$loader->add('Documents', __DIR__);

//$mogo = new MongoClient(array(), $options);
$connection = new Connection("mongodb://127.0.0.1:27017/social");




$config = new Configuration($connection);

$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('social');
$config->setMetadataDriverImpl(AnnotationDriver::create('module/Application/src/Application/Entity/Mongo'));

AnnotationDriver::registerAnnotationClasses();

$dm = DocumentManager::create($connection, $config);




$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'dm' => new \Doctrine\ODM\MongoDB\Tools\Console\Helper\DocumentManagerHelper($dm),
));

$app = new \Symfony\Component\Console\Application('Doctrine ODM MongoDB Command Line Interface');
$app->setHelperSet($helperSet);
$app->addCommands(array(
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateDocumentsCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateHydratorsCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateProxiesCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateRepositoriesCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\QueryCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\ClearCache\MetadataCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\CreateCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\DropCommand(),
    new \Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\UpdateCommand(),
));

$app->run();