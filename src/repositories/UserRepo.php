<?php

require_once "./classes/Database.php";
require_once "./classes/User.php";

class UserRepo extends Database
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM users');

        $users = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['id'],
                $user['name'],
                $user['surname'],
                $user['password'],
                $user['email'],
    
            );

            $users[] = $newUser;
        }

        return $users;
    }

    public function findById($userId)
    {
        $request = 'SELECT * FROM todo_users WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([':id' => $userId]);

        $data = $query->fetch();

        if ($data) {
            $searchedUser = new User(
                $data['id'],
                $data['name'],
                $data['surname'],
                $data['password'],
                $data['email'],
           
            );

            return $searchedUser;
        }
    }

    public function create($newUser)
    {
        $request = 'INSERT INTO todo_user (name, surname, email, password) VALUES (:name, :surname, :email, :password)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => $newUser->getName(),
            'surname' => $newUser->getSurname(),
            'birthdate' => $newUser->getBirthdate(),
            'email' => $newUser->getEmail(),
            'password' => $newUser->getPassword(),
        ]);
    }
}
//     public function update($user)
//     {
//         $request = 'UPDATE todo_user SET name = :name, surname = :surname, birthdate = :birthdate, email = :email, password = :password WHERE id = :id';

//         $query = $this->getDb()->prepare($request);

//         $query->execute([
//             'name' => $user->getName(),
//             'surname' => $user->getSurname(),
//             'email' => $user->getEmail(),
//             'password' => $user->getPassword(),
//             'id' => $user->getId(),
//         ]);
//     }
// }
//     public function delete($studentId)
//     {
//         $request = 'DELETE FROM student WHERE id = :id';

//         $query = $this->getDb()->prepare($request);

//         $query->execute([
//             'id' => $studentId
//         ]);
//     }
// }
