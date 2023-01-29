<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function history()
    {
        $this->render('history');
    }

    public function settings()
    {
        $this->render('settings');
    }
    public function changePassword()
    {
        $this->render('changePassword');
    }
    public function workout()
    {
        $this->render('workout');
    }
    public function trackedWorkout()
    {
        $this->render('trackedWorkout');
    }

}