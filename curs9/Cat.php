<?php

class Cat extends Animal
{
 public function __set($name, $value): void{
     $this->$name = $value;

 }
}