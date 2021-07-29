<?php
namespace techStore\classes\validation;

class Numeric implements validationRule
{
    public function check(string $name,$value){
        if (!is_numeric($value))
        {
            return "$name must be numeric ";
        }
        else 
        return false;
    }
}