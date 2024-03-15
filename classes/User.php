<?php

class User {

    private $name;
    private $surname;
    private $password;
    private $email;

    function __construct($username, $surname, $password, $email) {

        $this->name = $username;
        $this->surname = $surname;
        $this->password = $password;
        $this->email = $email;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    } 
    
    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function convertToArray() {
        return [
            $this->getName(),
            $this->getSurname(),
            $this->getPassword(),
            $this->getEmail(),
        ];
    }

}

?>