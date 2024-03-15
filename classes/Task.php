<?php

class Task {

        private $name;
        private $description;
        private $date;

        function __construct($name, $description, $date) {

            $this->name = $name;
            $this->description = $description;
            $this->date = $date;
        }
   
            
        
}