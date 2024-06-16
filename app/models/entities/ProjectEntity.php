<?php
    class ProjectEntity{
        private $id;
        private $name;
        private $startDate;
        private $endDate;
        private $description;

        public function __construct($name = null, $startDate = null, $endDate = null, $description = null){
            $this->name = $name;
            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->description = $description;
        }

        public function getId(){
            return $this-> id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getStartDate(){
            return $this->startDate;
        }
        
        public function setStartDate($startDate){
            $this->startDate = $startDate;
        }

        public function getEndDate(){
            return $this->endDate;
        }
        
        public function setEndDate($endDate){
            $this->endDate = $endDate;
        }

        public function getName(){
            return $this-> name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function __toString(){
            return "Name: {$this->name} - Start Date: {$this->startDate} - End Date: {$this->endDate} - Description: {$this->description}";
        }
    }
?>