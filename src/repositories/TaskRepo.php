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
                $task['priority'],
                $task['date'],
    
            );

            $tasks[] = $newTasks;
        }

        return $tasks;
    }

    public function findById($taskId)
    {
        $request = 'SELECT * FROM task WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([':id' => $taskId]);

        $data = $query->fetch();

        if ($data) {
            $searchedTask = new Task(
                $data['id'],
                $data['name'],
                $data['description'],
                $data['priority'],
                $data['date'],
            );

            return $searchedTask;
        }
    }

    public function create($newTask)
    {
        $request = 'INSERT INTO todo_task (Name, Description, Id_priority, _Date) VALUES (:name, :description, :priority, :date)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => 'Justine',
            'description' => $newTask->getDescription(),
            'priority' => $newTask->getPriority(),
            'date' => 'new DateTimeImmutable()'
          
        ]);
    }

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
