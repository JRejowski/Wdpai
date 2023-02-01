<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/ExerciseRepository.php';


class ExercisesController extends AppController
{
    private $exerciseRepository;

    public function __construct()
    {
        parent::__construct();
        $this->exerciseRepository = new ExerciseRepository();

    }

    public function addExercisesToWorkout()
    {
        $exercises = $this->exerciseRepository->getExercises();
        $this->render('addExercisesToWorkout', ['exercises' => $exercises]);
    }



}