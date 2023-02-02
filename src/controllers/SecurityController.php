<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/WorkoutRepository.php';
class SecurityController extends AppController
{
    private $userRepository;
    private $workoutRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->workoutRepository = new WorkoutRepository();
    }
    public function login()
    {
        if(isset($_COOKIE['user'])) {
            $this->render('workouts', ['workouts' => $this->workoutRepository->getWorkouts()]);
        }

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $user_cookie = 'user';
        $cookie_value = $email;
        setcookie($user_cookie, $cookie_value, time() + (60 * 30), "/");


        return $this->render('workouts', ['workouts' => $this->workoutRepository->getWorkouts()]);

    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        if(isset($_COOKIE['user'])) {
            $this->render('workouts', ['workouts' => $this->workoutRepository->getWorkouts()]);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        if ($password !== $repeatPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($email, sha1($password));
        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You have been succesfully registrated!']]);
    }


    public function changePassword()
    {
        if(!$this->isPost()) {
            return $this->render('changePassword');
        }

        $oldPassword = sha1($_POST["OldPassword"]);
        $newPassword = sha1($_POST["NewPassword"]);
        $repeatPassword = sha1($_POST["repeatNewPassword"]);

        $user = $this->userRepository->getUser('major@bombas.pl');

        if($user->getPassword() !== $oldPassword) {
            return $this->render('changePassword', ['messages' => ['Wrong old password!']]);
        }

        if ($newPassword !== $repeatPassword) {
            return $this->render('changePassword', ['messages' => ['Please provide proper password']]);
        }

        $this->userRepository->updatePassword($user, $repeatPassword);
        return $this->render('changePassword', ['messages' => ['Password was successful changed!']]);
    }

    public function logout(){
        setcookie('user', $_COOKIE['user'], time() - 10, "/");
        $this->render('login', ['messages' => ['Logout successful']]);
    }


}