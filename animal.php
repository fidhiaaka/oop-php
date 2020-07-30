<?php

  class Animal
  {
    //property
    public $name;
    public $legs = 2;
    public $cold_blooded = 'false';

    //konstruktor
    public function __construct($nama)
    {
      $this->name = $nama;
    }

    //function get
    public function get_legs()
    {
      return $this->legs;
    }

    public function get_cold_blooded()
    {
      return $this->cold_blooded;
    }

  }

?> 