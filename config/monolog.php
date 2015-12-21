<?php

use Silex\Provider\MonologServiceProvider;

#Armazena os logs de erro
$app->register(new MonologServiceProvider(), [
    'monolog.logfile' => ROOT . '/storage/log/app.log',
    'monolog.name' => 'app',
    'monolog.level' => 300
]);

