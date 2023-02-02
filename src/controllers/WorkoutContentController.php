<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Workout.php';
require_once __DIR__.'/../repository/WorkoutRepository.php';
class WorkoutContentController extends AppController
{

    private $message = [];
    private $workoutRepository;

    public function __construct()
    {
        parent::__construct();
        $this->workoutRepository = new WorkoutRepository();
    }

    public function workout()
    {
        $workouts = $this->workoutRepository->getWorkoutContent();
        $this->render('workout', ['workouts' => $workouts]);
    }





}