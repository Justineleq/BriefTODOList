<?php

require_once "./classes/Database.php";
require_once "./classes/User.php";

class TaskRepo extends Task
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM users');

        $tasks = [];

        foreach ($data as $task) {
            $newTasks = new Task(
                $task['id'],
                $task['name'],
                $task['description'],
                $task['date'],
    
            );

            $tasks[] = $newTasks;
        }

        return $tasks;
    }

    public function findById($studentId)
    {
        $request = 'SELECT * FROM task WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([':id' => $studentId]);

        $data = $query->fetch();

        if ($data) {
            $searchedTask = new Task(
                $data['id'],
                $data['name'],
                $data['description'],
                $data['date'],
            );

            return $searchedTask;
        }
    }

    public function create($newTask)
    {
        $request = 'INSERT INTO task (name, description, date) VALUES (:name, :description, :date)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => $newTask->getName(),
            'surname' => $newTask->getDescription(),
            'birthdate' => $newTask->getDate(),
          
        ]);
    }

    public function update($task)
    {
        $request = 'UPDATE task SET name = :name, description = :description, date = :date, WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => $task->getName(),
            'description' => $task->getDescription(),
            'date' => $task->getDate(),
            'id' => $task->getId(),
        ]);
    }

    public function delete($taskId)
    {
        $request = 'DELETE FROM task WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'id' => $taskId
        ]);
    }
}
