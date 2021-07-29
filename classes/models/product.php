<?php
 namespace techStore\classes\models;
 use techStore\classes\Db ;

require_once("classes/db.php");
class Product extends Db
{
 public function __construct()
 {
    $this->table="product"; 
    $this->connect();
 }
}