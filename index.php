<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Core\{Router, Request};

require './vendor/autoload.php';
require './core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
