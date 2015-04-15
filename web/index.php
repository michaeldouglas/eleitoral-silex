<?php
ini_set('display_errors', true);
require_once '../vendor/autoload.php';

$app = require_once dirname(__DIR__)."/App/app.php";
$app['http_cache']->run();
