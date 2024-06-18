<?php 
    class SequencingEntity{
        private $id;
        private $name;
        private $method;
        private $sequencing;
        private $project;
        private $comments;

        public function __construct($name = null, $method = null, $sequencing = null, $project = null, $comments = null){
            $this->name = $name;
            $this->method = $method;
            $this->sequencing = $sequencing;
            $this->project = $project;
            $this->comments = $comments;
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

        public function getComments(){
            return $this->comments;
        }

        public function setComments($comments){
            $this->comments = $comments;
        }

        public function __toString(){
            return "Name: {$this->name} - Method: {$this->method} - Sequencing: {$this->sequencing} - Project: {$this->getProject()->getName()} - Comments: {$this->comments}";
        }
    }
?>