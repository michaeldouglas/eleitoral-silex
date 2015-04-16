<?php
ini_set('display_errors', true);
require_once '../vendor/autoload.php';

$app = require_once dirname(__DIR__)."/app/app.php";
$app['http_cache']->run();
