<?php

require_once __DIR__ . '../../src/init.php';


$data = file_get_contents('php://input');     
$decodedData = json_decode($data, true);


if ($decodedData)
 {
    $job = htmlspecialchars($decodedData['job']);
    $description = htmlspecialchars($decodedData['description']);
    $priority = htmlspecialchars($decodedData['priority']);
    $date = htmlspecialchars($decodedData['date']);



    $newTask = new Task (
        null,
        $job,
        $description,
        $priority,
        $date
    );
  

    $taskRepo = new TaskRepo();

    $taskRepo->create($newTask);

    header('Location: ./../index.php');
}