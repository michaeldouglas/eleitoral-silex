<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__.'/../app/app.php';

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => 
    [
        'mysql' => 
        [
            'driver'   => 'pdo_mysql',
            'host'     => "10.10.100.57",
            'dbname'   => "admin_portal",
            'user'     => "portal",
            'password' => "q1w2e3",
            'charset'  => 'utf8mb4',
        ]
    ],
));
    

$paths = array("app/models/entities");
$isDevMode = false;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);


$driverImpl = $config->newDefaultAnnotationDriver('app/models/entities');
$config->setMetadataDriverImpl($driverImpl);

$config->setProxyDir('app/models/entities');
$config->setProxyNamespace('app\models\entities');
$config->setAutoGenerateProxyClasses(true);


$entityManager = EntityManager::create($app['dbs.options']['mysql'], $config);
