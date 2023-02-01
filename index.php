<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index','DefaultController');
Routing::get('settings','DefaultController');

Routing::get('addExercisesToWorkout','ExercisesController');

Routing::post('history','HistoryController');
Routing::post('getExercises','HistoryController');


Routing::post('addTrackedWorkout','WorkoutController');
Routing::get('workout','WorkoutController');
Routing::get('workouts','WorkoutController');
Routing::get('trackedWorkout','WorkoutController');;
Routing::post('addWorkoutRoutine','WorkoutController');
Routing::post('search','WorkoutController');

Routing::post('login','SecurityController');
Routing::post('logout', 'SecurityController');
Routing::post('register','SecurityController');
Routing::post('changePassword','SecurityController');


Routing::run($path);
