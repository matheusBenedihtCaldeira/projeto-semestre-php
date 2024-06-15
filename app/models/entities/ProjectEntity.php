<?php
    class Project{
        private $id;
        private $name;
        private $description;

        public function __construct($id, $name, $description){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
        }

        public function getId(){
            return $this-> id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this-> name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getDecscription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }
    }
?>