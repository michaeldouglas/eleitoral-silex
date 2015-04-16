<?php

/* Serviço de conteúdo do cadastro eleitoral */
$app['conteudo'] = $app->share(function () use ($app) {
    return new app\controller\conteudoController($app);
});

/* Serviço de controle de login do cadastro eleitoral */
$app['login'] = $app->share(function () use ($app) {
    return new app\controller\LoginController($app);
});