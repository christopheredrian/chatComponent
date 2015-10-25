<?php 

class Credentials{
    
    private $name, $password, $room, $key;
    
    public function __constuct($name, $password, $room, $key){
        $this->name = $name;
        $this->password = $password;
        $this->room = $room;
        $this->key = $key;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRoom(){
        return $this->room;
    }
    public function getKey(){
        return $this->key;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public function Password($password){
        return $this->password = $password;
    }
    public function setRoom($room){
        return $this->room = $room;
    }
    public function setKey($key){
        return $this->key = $key;
    }
}

?>