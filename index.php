<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('roulette', 'DefaultController');
Routing::get('coinflip', 'DefaultController');
Routing::get('recovery', 'DefaultController');
Routing::get('ranking', 'DefaultController');

Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('recovery', 'SecurityController');

Routing::run($path);
