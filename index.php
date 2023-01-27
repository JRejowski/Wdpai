<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index','DefaultController');
Routing::get('workouts','WorkoutController');
Routing::post('login','SecurityController');
Routing::get('register','DefaultController');
Routing::get('history','DefaultController');
Routing::post('addWorkoutRoutine','WorkoutController');
Routing::run($path);
