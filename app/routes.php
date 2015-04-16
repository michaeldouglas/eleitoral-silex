<?php
#Rotas admin do sistema
$app->get('/', 'conteudo:index');
$app->get('/eleitoral', 'conteudo:eleitoral');
$app->get('/login', 'login:login');
