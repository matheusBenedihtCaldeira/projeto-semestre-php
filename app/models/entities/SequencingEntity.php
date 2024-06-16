<?php 
    class SequencingEntity{
        private $id;
        private $name;
        private $method;
        private $length;
        private $sequencing;
        private $project;

        public function __construct($id, $name, $method, $length, $sequencing, $project){
            $this->id = $id;
            $this->name = $name;
            $this->method = $method;
            $this->length = $length;
            $this->sequencing = $sequencing;
            $this->project = $project;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
        
        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getMethod(){
            return $this->method;
        }

        public function setMethod($method){
            $this->method = $method;
        }

        public function getLength(){
            return $this->length;
        }

        public function setLength($length){
            $this->length = $length;
        }

        public function getSequencing(){
            return $this->sequencing;
        }

        public function setSequencing($sequencing){
            $this->sequencing = $sequencing;
        }

        public function getProject(){
            return $this->project;
        }

        public function setProject($project){
            $this->project = $project;
        }

        public function __toString(){
            return "Name: {$this->name} - Method: {$this->method} - Length: {$this->length} - Sequencing: {$this->sequencing}";
        }
    }
?>