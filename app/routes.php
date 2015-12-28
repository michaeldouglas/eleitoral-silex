<?php
#Rotas admin do sistema
$app->get('/', 'conteudo:index');
$app->get('/sistema', 'conteudo:eleitoral');
$app->get('/login', 'login:login');
$app->get('/sistema/credito/redirecionamento', 'credito:index')
        ->bind('credito');
