<?php

if(!empty(file_get_contents('php://input'))) {
    $data = json_decode(file_get_contents('php://input'));

header('Content-Type: application/json');
echo json_decode($data);
}


?>