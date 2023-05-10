<?php

class Empleado {
    private $nombre;
    private $email;
    private $sexo;
    private $area;
    private $boletin;
    private $descripcion;
    private $roles = array();
    

    public function __construct(){}
    
    // Getter
    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function getArea(){
        return $this->area;
    }
    public function getBoletin(){
        return $this->boletin;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getRoles(){
        return $this->roles;
    }

    //Setter
    public function setNombre($nombre){
        $this->nombre;
    }

    public function setEmail($email){
        $this->email;
    }

    public function setSexo($sexo){
        $this->sexo;
    }
    public function setArea($area){
        return $this->area;
    }
    public function setBoletin($boletin){
        $this->boletin;
    }
    public function setDescripcion($descripcion){
        $this->descripcion;
    }
    public function setRoles($roles){
        $this->roles;
    }
}
?>
