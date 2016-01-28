<?php
#Rotas admin do sistema
$app->get('/', 'conteudo:index');
$app->get('/login', 'login:login');
$app->get('/sistema', 'conteudo:eleitoral')->bind('sistema');

#Rotas para usuários
$app->get('/sistema/usuarios/inserir-usuario', 'usuarios:index')->bind('inserir-usuario');
$app->get('/sistema/usuarios/listar-usuario', 'usuarios:listar')->bind('listar-usuario');

#Rotas para os gráficos do admin do portal
$app->get('/graficos/total-cursos', 'cursos:cursos')->bind('total-cursos');

# Rotas para o crédito
$app->get('/sistema/credito/redirecionamento', 'credito:index')->bind('credito');

#Aprovação
$app->get('/sistema/aprovar', 'aprovar:index')->bind('aprovar');
$app->post('/sistema/aprovar', 'aprovar:index')->bind('aprovar_listar');

