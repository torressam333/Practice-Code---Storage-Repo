<?php
//This file needs to be required for the
//autoloader in composer to work

use App\Core\{Router, Request};

require "vendor/autoload.php";
require 'core/bootstrap.php';

 Router::load('app/routes.php')

    ->direct(Request::uri(), Request::method());




?>
