<?php

class Reviewer{
    private $name;
    private $email;
    private $password;
    private $document;
    private $adress;
    private $link;

    public function __construct ($name, $email, $password, $document, $adress, $link){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        $this->adress = $adress;
        $this->link = $link;
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

    public function setLink ($link){
        $this->link = $link;

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

    public function setLink ($link){
        $this->link = $link;

    }



}