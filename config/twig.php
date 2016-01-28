<?php

use Silex\Provider\TwigServiceProvider;

$app->register(new TwigServiceProvider(), array(
    'twig.options' => [
        'cache' => $directory['directoryROOT'] .'/storage/cache',
        'strict_variables' => true
    ],
    'twig.form.templates' => array('layouts/layout.tpl'),
    'twig.path' => array($directory['directoryROOT'] . '/app/modules/adminportal/Views/')
));
