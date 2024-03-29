<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Workout.php';
require_once __DIR__.'/../models/Exercise.php';
require_once __DIR__.'/../repository/WorkoutRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/ExerciseRepository.php';
class WorkoutController extends AppController
{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png','image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';
    private $message = [];
    private $workoutRepository;
    private $userRepository;
    private $exerciseRepository;

    public function __construct()
    {
        parent::__construct();
        $this->workoutRepository = new WorkoutRepository();
        $this->userRepository = new UserRepository();
        $this->exerciseRepository = new ExerciseRepository();
    }


    public function workouts()
    {
        $workouts = $this->workoutRepository->getWorkouts();
        $this->render('workouts', ['workouts' => $workouts]);
    }

    public function workout(string $id)
    {
        $id = intval($id);
        $workout = $this->workoutRepository->getWorkoutContent($id);
        if($workout){
            $this->render('workout',['workout'=>$workout]);
        }
    }
    public function trackedWorkout(string $id)
    {
        $id = intval($id);
        $workout = $this->workoutRepository->getWorkoutContent($id);
        if($workout){
            $this->render('trackedWorkout',['workout'=>$workout]);
        }
    }

    public function addExerciseToWorkout()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);
            $exercise = $this->exerciseRepository->getExerciseByName($decoded['exercise_name']);
            $this->exerciseRepository->addExerciseToWorkout($decoded['workout'],$exercise->getId());

        }

    }


    public function addWorkoutRoutine()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $user = $this->userRepository->getUser($_COOKIE['user']);
            $workout = new Workout($_POST['title'],$_FILES['file']['name']);
            $this->workoutRepository->addWorkout($workout,$user->getId());

            return $this->render('workouts',['messages' => $this->message, 'workouts' => $this->workoutRepository->getWorkouts()]);
        }

        $this->render('add-workout-routine',['messages' => $this->message]);
    }


    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->workoutRepository->getWorkoutByTitle($decoded['search']));
        }
    }
    private function validate(array $file): bool
    {
        if($file['size']>self::MAX_FILE_SIZE){
            $this->message[] = 'File is too large for destination file system!';
            return false;
        }

        if(!isset($file['type']) || !in_array($file['type'],self::SUPPORTED_TYPES)){
            $this->message[] = 'File type is not supported!';
            return false;

        }

        return true;
    }



}