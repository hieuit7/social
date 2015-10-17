<?php

/**
 * CsnUser - Coolcsn Zend Framework 2 User Module
 * 
 * @link https://github.com/coolcsn/CsnUser for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnUser/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>
 * @author Svetoslav Chonkov <svetoslav.chonkov@gmail.com>
 * @author Nikola Vasilev <niko7vasilev@gmail.com>
 * @author Stoyan Revov <st.revov@gmail.com>
 * @author Martin Briglia <martin@mgscreativa.com>
 */
return array(
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'params' => array(
                    'host' => '127.0.0.1',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => '1234',
                    'dbname' => 'social',
                    'charset' => 'utf8', // extra
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8'
                    )
                )
            )
        ),
        'configuration' => array(
            'orm_default' => array(
                // metadata cache instance to use. The retrieved service name will
                // be `doctrine.cache.$thisSetting`
                'metadata_cache' => 'array',
                // DQL queries parsing cache instance to use. The retrieved service
                // name will be `doctrine.cache.$thisSetting`
                'query_cache' => 'array',
                // ResultSet cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'result_cache' => 'array',
                // Hydration cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'hydration_cache' => 'array',
                // Mapping driver instance to use. Change this only if you don't want
                // to use the default chained driver. The retrieved service name will
                // be `doctrine.driver.$thisSetting`
                'driver' => 'orm_default',
                //
                //Generate proxies automatically (turn off for production)
                'generate_proxies' => true,
                // directory where proxies will be stored. By default, this is in
                // the `data` directory of your application
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                //
                // namespace for generated proxy classes
                'proxy_namespace' => 'DoctrineORMModule\Proxy',
                //
                // SQL filters. See http://docs.doctrine-project.org/en/latest/reference/filters.html
                'filters' => array(),
                // Custom DQL functions.
                // You can grab common MySQL ones at https://github.com/beberlei/DoctrineExtensions
                // Further docs at http://docs.doctrine-project.org/en/latest/cookbook/dql-user-defined-functions.html
                'datetime_functions' => array(),
                'string_functions' => array(),
                'numeric_functions' => array(),
                //
                //Second level cache configuration (see doc to learn about configuration)
                'second_level_cache' => array(
                    'enabled' => true,
                    'default_lifetime' => 7200,
                    'default_lock_lifetime' => 60,
                    'file_lock_region_directory' => __DIR__ . '/../src/Application/FileLocks',
                )
            )
        ),
        'driver' => array(
            'application_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../../module/Application/src/Application/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'application_entities',
                )
            ),
            'mongo_db_document' => array(
                'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../../src/Application/Entity/Mongo'
            ),
            'odm_default' => array(
                'drivers' => array(
                    'Application\Entity\Mongo' => 'mongo_db_document'
                )
            )
        )
//        'cache' => array(
//            'redis' => array(
//                'class' => 'Doctrine\Common\Cache\RedisCache',
//                'instance' => function($sm) {
//                    $redis = new Redis();
//                    $redis->connect('www.visualweber.net',6379);
//                    return $redis;
//                },
//                'namespace' => 'DoctrineModule',
//            ),
//        )
    ),
);
