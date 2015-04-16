<?php
#Rotas admin do sistema
$app->get('/', 'conteudo:index');
$app->get('/eleitoral/{param}', 'conteudo:eleitoral');
$app->get('/login', 'login:login');
