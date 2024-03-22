<?php

require_once __DIR__ . '/../init.php';

class TaskRepo extends DataBase
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM id_Task');

        $tasks = [];

        foreach ($data as $task) {
            $newTasks = new Task(
                $task['id'],
                $task['name'],
                $task['description'],
                $task['date'],
                $task['priority'],
            );

            $tasks[] = $newTasks;
        }

        return $tasks;
    }

    public function create($newTask)
    {
        $request = 'INSERT INTO todo_task (Name, Description, _Date, Id_priority ) VALUES (:name, :description, :date, :priority)';

        $query = $this->getDb()->prepare($request);


        $query->execute([
            'name' => $newTask->getName(),
            'description' => $newTask->getDescription(),
            'date' => $newTask->getDate(),
            'priority' => $newTask->getPriority()
            
          
        ]);
    } 
    
    
    // public function findById($taskId)
    // {
    //     $request = 'SELECT * FROM task WHERE id = :id';

    //     $query = $this->getDb()->prepare($request);

    //     $query->execute([':id' => $taskId]);

    //     $data = $query->fetch();

    //     if ($data) {
    //         $searchedTask = new Task(
    //             $data['id'],
    //             $data['name'],
    //             $data['description'],
    //             $data['priority'],
    //             $data['date'],
    //         );

    //         return $searchedTask;
    //     }
    // }



    // public function update($task)
    // {
    //     $request = 'UPDATE task SET name = :name, description = :description, priority = :priority, date = :date, WHERE id = :id';

    //     $query = $this->getDb()->prepare($request);

    //     $query->execute([
    //         'name' => $task->getName(),
    //         'description' => $task->getDescription(),
    //         'priority' => $task->getPriority(),
    //         'date' => $task->getDate(),
    //         'id' => $task->getId(),
    //     ]);
    // }

    // public function delete($taskId)
    // {
    //     $request = 'DELETE FROM task WHERE id = :id';

    //     $query = $this->getDb()->prepare($request);

    //     $query->execute([
    //         'id' => $taskId
    //     ]);
    // }
}
