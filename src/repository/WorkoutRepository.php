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

}