<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('roulette', 'DefaultController');
Routing::get('coinflip', 'DefaultController');
Routing::get('recovery', 'DefaultController');
Routing::get('ranking', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::run($path);
