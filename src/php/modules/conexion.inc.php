<?php
    $credentials = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db_name' => 'blog_rocket_ideas'
    ];

    // print_r($credentials['driver']);

    $pdo = new PDO('mysql:host='. $credentials['host'] . ';dbname=' . $credentials['db_name'], $credentials['user'], $credentials['pass']);

    // $pdo = new PDO($credentials['driver'] . ":host". $credentials['host'].";dbname=".$credentials['db_name'], $credentials['user'], $credentials['pass']);
?>