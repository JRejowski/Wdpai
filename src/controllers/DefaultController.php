<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index()
    {
        $this->render('login');
    }

    public function settings()
    {
        $this->render('settings');
    }

    public function trackedWorkout()
    {
        $this->render('trackedWorkout');
    }

    public function addExercisesToWorkout()
    {
        $this->render('addExercisesToWorkout');
    }

}