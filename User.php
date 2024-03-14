<?php

class User {

    private $username;
    private $email;
    private $password;

    function __construct($username, $email, $password) {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    } 
    
    public function getPassword() {
        return $this->password;
    }

    public function convertToArray() {
        return [
            $this->getUsername(),
            $this->getEmail(),
            $this->getPassword(),
        ];
    }

}

?>