<?php

use Symfony\Component\HttpFoundation\Request;

/* Serviço de conteúdo do cadastro eleitoral */
$app['conteudo'] = $app->share(function () use ($app) {
    $request = new Request;
    return new app\Controller\Conteudo\conteudoController($app, $request);
});

/* Serviço de controle de login do cadastro eleitoral */
$app['login'] = $app->share(function () use ($app) {
    $request = new Request();
    return new app\Controller\Login\loginController($app, $request);
});