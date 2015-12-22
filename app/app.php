<?php

#Chama as classes necessarias para utilização
use Silex\Provider\UrlGeneratorServiceProvider;

#config do sistema
define('ROOT', dirname(__DIR__));

#chamada do autoloader
$loader = require ROOT . "/vendor/autoload.php";

#Cria instancia objeto app Silex
$app = new Silex\Application();

#Registra o objeto para criação de URL
$app->register(new UrlGeneratorServiceProvider());

#Configuração do dot env
$app['env'] = (new \Dotenv\Dotenv(dirname(__DIR__)))->load();

#ativa o debug
$app['debug'] = getenv('debug');

#cache
$app->register(new Silex\Provider\HttpCacheServiceProvider(), ['http_cache.cache_dir' => ROOT . '/storage/temp/http']);

# autoloader
$app['autoloader'] = $app->share(function()use($loader) {
    return $loader;
});

# Adiciona ao autoloader a chamada
$app['autoloader']->add("app", ROOT);

#Registra a pasta de layout do sistema
require_once ROOT . '/config/twig.php';

//Configuração da base de dados
require_once ROOT . '/config/monolog.php';

//Configuração da base de dados
require_once ROOT . '/config/database.php';

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\SessionServiceProvider());

#Chamada de arquivos necessarios
require_once __DIR__ . '/services/services.php';
require_once 'routes.php';

$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'sistema' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'http' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/sistema/login_check'),
            'logout' => array('logout_path' => '/logout', 'invalidate_session' => true),
            'users' => $app->share(function() use ($app) {
                return new app\Models\Usuarios\usuarios($app);
            }),
        ),
    ),
    'security.access_rules' => array(
        array('^/sistema', 'ROLE_ADMIN')
    )
));

#Retorna app para utilização
return $app;
