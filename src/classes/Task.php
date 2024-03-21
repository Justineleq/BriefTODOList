<?php

class Task {

        private $name;
        private $description;
        private $priority;
        private $date;

        function __construct($name, $description, $priority, $date) {

            $this->name = $name;
            $this->description = $description;
            $this->priority = $priority;
            $this->date = $date;
        }

        public function getName() {
            return $this->name;
        }

        public function setName() {
            return $this->name;
        }
        
        public function getDescription() {
            return $this->description;
        }

        public function setDescription() {
            return $this->name;
        }

        public function getPriority() {
            return $this->priority;
        }

        public function setPriority() {
            return $this->priority;
        }

        public function getDate() {
            return $this->name;
        }

        public function setDate() {
            return $this->date;
        }
            
        
}