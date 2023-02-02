<?php

require_once  'Repository.php';
require_once  __DIR__.'/../models/Exercise.php';
class ExerciseRepository extends Repository
{
    public function getExercises(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            select name, body_part,id from exercises order by body_part
        ');

        $stmt->execute();
        $exercises = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($exercises as $exercise){
            $result[]= new Exercise(
                $exercise['name'],
                $exercise['body_part'],
                $exercise['id']
            );
        }

        return $result;
    }

    public function  getExerciseByName($givenName){
        $stmt = $this->database->connect()->prepare('
            select name, body_part,id from exercises where name = :name
        ');
        $stmt->bindParam(':name',$givenName,PDO::PARAM_STR);
        $stmt->execute();
        $exercise = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Exercise(
            $exercise['name'],
            $exercise['body_part'],
            $exercise['id']
        );
    }


    public function addExerciseToWorkout($id_workout,$id_exercise)
    {
        $stmt = $this->database->connect()->prepare('
             INSERT INTO workout_content (id_workout_plan, id_exercise)
             VALUES (?,?)
        ');

        $stmt->execute([
            $id_workout,
            $id_exercise
        ]);
    }
}