<?php

require_once  'Repository.php';
require_once  __DIR__.'/../models/Exercise.php';
class ExerciseRepository extends Repository
{
    public function getExercises(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            select name, body_part from exercises order by body_part
        ');

        $stmt->execute();
        $exercises = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($exercises as $exercise){
            $result[]= new Exercise(
                $exercise['name'],
                $exercise['body_part']
            );
        }

        return $result;
    }
}