<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index()
    {
        //TODO display login.html
        $this->render('login');
    }

    public function register()
    {
        //TODO display register.html
        $this->render('register');
    }

    public function main_page()
    {
        //TODO display main-page.html
        $this->render('main-page');
    }
}