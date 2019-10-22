<?php

use Helpers\Csrf;

session_start();
require_once 'vendor/autoload.php';
require_once 'Config/config.php';
require_once 'Config/minifier.php';
require_once 'Config/Routers.php';
Csrf::csrfTokengenerate();
$c = new Core\Core;
$c->run();
