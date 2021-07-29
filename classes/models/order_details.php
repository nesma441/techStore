<?php
namespace techStore\classes\models;
use techStore\classes\Db ;

require_once("./classes/db.php");
class OrderDetails extends Db
{
 public function __construct()
 {
    $this->table="order_details"; 
    $this->connect();
 }
}