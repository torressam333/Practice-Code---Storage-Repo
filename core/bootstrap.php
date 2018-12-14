<?php

$app =[];

$app['config'] = require 'config.php';

require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';

$app['database'] = new QueryBuilder(

    connection::make($app['config']['database'])
);


//return new QueryBuilder(connection::make($config['database']));