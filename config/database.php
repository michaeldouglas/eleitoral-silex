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
        ],
        'portal_pravaler' =>
        [
            'driver'   => 'pdo_mysql',
            'host'     => "10.10.100.57",
            'dbname'   => "portalpravaler_novo",
            'user'     => "portal",
            'password' => "q1w2e3",
            'charset'  => 'utf8mb4',
        ]
    ],
));
    

$paths = array("app/modules/adminportal/Models/entities/admin");
$isDevMode = false;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

$driverImpl = $config->newDefaultAnnotationDriver('app/modules/adminportal/Models/entities/admin');

$config->setProxyDir('app/modules/adminportal/entities/admin');
$config->setProxyNamespace('app\modules\adminportal\Models\entities\admin');
$config->setAutoGenerateProxyClasses(true);

//Conexão Admin Portal Pravaler
$entityManager = EntityManager::create($app['dbs.options']['mysql'], $config);
$app['entityManager'] = $entityManager;

//Conexão Portal Pravaler
$entityManagerPortal = EntityManager::create($app['dbs.options']['portal_pravaler'], $config);
$app['entityManagerPortal'] = $entityManagerPortal;
