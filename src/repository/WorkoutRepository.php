<?php

require_once  'Repository.php';
require_once  __DIR__.'/../models/Workout.php';

class WorkoutRepository extends Repository
{
    public function getWorkout(int $id): ?Workout
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM workout_plan WHERE id = :id
        ');
        $stmt->bindParam(':id', $email, PDO::PARAM_INT);
        $stmt->execute();

        $workout = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($workout == false) {
            return null;
        }

        return new Workout(
            $workout['title'],
            $workout['image']
        );
    }

    public function addWorkout(Workout $workout): void
    {
        $stmt = $this->database->connect()->prepare('
        INSERT INTO workout_plan (title, id_user, image)
        VALUES (?,?,?)
        ');


        $userID =1;
        $stmt->execute([
            $workout->getTitle(),
            $userID,
            $workout->getImage()
        ]);
    }

    public function getWorkouts(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM workout_plan
        ');
        $stmt->execute();
        $workouts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($workouts as $workout){
            $result[]= new Workout(
                $workout['title'],
                $workout['image']
            );
        }

        return $result;
    }

    public function getWorkoutByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM workout_plan WHERE LOWER(title) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}