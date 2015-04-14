<?php
#config do sistema
define('ROOT', dirname(__DIR__));

#chamada do autoloader
$loader = require ROOT . "/vendor/autoload.php";

$app = new Silex\Application();

#ativa o debug
$app['debug'] =  true;

#cache
$app->register(new Silex\Provider\HttpCacheServiceProvider(), ['http_cache.cache_dir'=>ROOT.'/temp/http']);

# autoloader
$app['autoloader'] = $app->share(function()use($loader){return $loader;});

# Adiciona ao autoloader a chamada
$app['autoloader']->add("App",ROOT);


require 'routes.php';
return $app;
