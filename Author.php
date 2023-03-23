<?php

class Author{
    private $name;
    private $email;
    private $password;
    private $document;
    private $adress;
    private $school;

    public function __construct ($name, $email, $password, $document, $adress, $school){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        $this->adress = $adress;
        $this->school = $school;
    }

    public function setName ($name){
        $this->name = $name;

    }

    public function setEmail ($email){
        $this->email = $email;

    }

    public function setPassword ($password){
        $this->password = $password;

    }

    
    public function setDocument ($document){
        $this->document = $document;

    }

    
    public function setAdress ($adress){
        $this->adress = $adress;

    }

    
    public function setSchool ($school){
        $this->school = $school;

    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getDocument(){
        return $this->document;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function getSchool(){
        return $this->school;
    }
}