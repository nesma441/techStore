<?php
namespace techStore\classes\validation;

 interface validationRule
{
    public function check(string $name,$value);
}