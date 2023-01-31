<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/HistoryRepository.php';
class HistoryController extends AppController
{

    private $historyRepository;

    public function __construct()
    {
        parent::__construct();
        $this->historyRepository = new HistoryRepository();
    }

    public function history()
    {
        $this->render('history');
    }
    public function getExercises()
    {

        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->historyRepository->getExercises($decoded['date']));
        }


    }
}