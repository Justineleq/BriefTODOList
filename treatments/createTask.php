<?php

require_once __DIR__ . '../../src/init.php';


$data = file_get_contents('php://input');     
$decodedData = json_decode($data, true);


if ($decodedData)
 {
    $name = htmlspecialchars($decodedData['name']);
    $description = htmlspecialchars($decodedData['description']);
    $priority = htmlspecialchars($decodedData['priority']);
    $date = htmlspecialchars($decodedData['date']);



    $newTask = new Task (
        null,
        $name,
        $description,
        $date,
        $priority
      
    );
    var_dump($newTask);
    $taskRepo = new TaskRepo();
    
    $taskRepo->create($newTask);
    
   
    // header('Location: ./../index.php');
}