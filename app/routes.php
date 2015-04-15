<?php
$app->get('/', 'app\Controller\conteudoController::index');
$app->get('/eleitoral', 'app\Controller\conteudoController::eleitoral');
$app->get('/login', 'app\Controller\LoginController::login');
#Rotas admin do sistema