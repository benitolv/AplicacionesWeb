<?php namespace AppData\Model;

  class Home{
    function __construct(){

    }
    public function set($atributo,$valor){
      $this->$artributos=$valor;
    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function getOne(){
    }

  }
  ?>
