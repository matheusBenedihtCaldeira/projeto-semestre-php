<?php

    class UserEntity{
        private $id;
        private $firstName;
        private $lastName;
        private $email;
        private $password;
        private $gender;
        private $dateOfBirth;

        public function __construct($firstName = null, $lastName = null, $email = null, $password = null, $gender = null, $dateOfBirth = null){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->gender = $gender;
            $this->dateOfBirth = $dateOfBirth;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }

        public function getDateOfBirth(){
            return $this->dateOfBirth;
        }

        public function setDateOfBirth($dateOfBirth){
            $this->dateOfBirth = $dateOfBirth;
        }

        public function __toString(){
            return "First name: {$this->firstName} - Last name: {$this->firstName} - E-mail: {$this->email} - Gender: {$this->gender} - Data of birth: {$this->dateOfBirth}";
        }

        public function login($email, $password){
            
        }
    }
?>