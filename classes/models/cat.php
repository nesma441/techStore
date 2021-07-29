<?php
namespace techStore\classes\models;
use techStore\classes\Db ;
require_once("./classes/db.php");
class Cat extends Db
{
 public function __construct()
 {
    $this->table="cats"; 
    $this->connect();
 }
}