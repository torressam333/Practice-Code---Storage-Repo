<?php

//Select ALL users(table in DB) using
// the method found in (core/QueryBuilder.php) 
$users = $app['database']->selectAll('users');

//Load our view
require 'views/index.view.php';



?>