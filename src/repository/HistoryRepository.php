<?php

require_once  'Repository.php';
require_once  __DIR__.'/../models/TrackedWorkoutContent.php';

class HistoryRepository extends Repository
{
    public function getExercises($givenDate): array
    {

        $stmt = $this->database->connect()->prepare('
            select email, name,body_part, weight, reps from exercises 
            join details d on exercises.id = d.id_exercises 
            join tracked_workout_content twc on d.id = twc.id_details 
            join tracked_workout tw on twc.id_tracked_workout = tw.id 
            join users u on tw.id_user = u.id where tw.date = :date
        ');
        $stmt->bindParam(':date',$givenDate);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


    
}