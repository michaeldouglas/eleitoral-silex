<?php
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'sistema' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'http' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/sistema/login_check'),
            'logout' => array('logout_path' => '/logout', 'invalidate_session' => true),
            'users' => $app->share(function() use ($app) {
                $requestPasword = ['senha' => filter_input(INPUT_POST, '_password')];
                return new app\Models\Usuarios\usuarios($app, $requestPasword);
            }),
        ),
    ),
    'security.access_rules' => array(
        array('^/sistema', 'ROLE_ADMIN')
    )
));
            
$app['security.encoder.digest'] = $app->share(function ($app) {
    return new MessageDigestPasswordEncoder('sha1', false, 1);
});
