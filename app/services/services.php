<?php

/* Serviço de conteúdo do cadastro eleitoral */
$app['conteudo'] = $app->share(function () use ($app) { 
    return new app\Controller\Conteudo\conteudoController($app);
});

/* Serviço de controle de login do cadastro eleitoral */
$app['login'] = $app->share(function () use ($app) {
    return new app\Controller\Login\loginController($app);
});