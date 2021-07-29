<?php
namespace techStore\classes\models;
use techStore\classes\Db ;

class Order extends Db
{
    public function __construct()
    {
        $this->table="orders";
        $this->connect();

    }
}