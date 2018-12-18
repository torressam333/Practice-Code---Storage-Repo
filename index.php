<?php

//This file needs to be required for the
//autoloader in composer to work
require "vendor/autoload.php";
require 'core/bootstrap.php';

 Router::load('routes.php')

    ->direct(Request::uri(), Request::method());




?>
