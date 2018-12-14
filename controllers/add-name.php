<?php

$app['database']->insert('users', [

    'name' => htmlspecialchars($_POST['name']),

]);

header('Location: /');


