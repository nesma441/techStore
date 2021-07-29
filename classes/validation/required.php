<?php
namespace techStore\classes\validation;

class Required implements validationRule
{
    public function check(string $name,$value){
        if (empty($value))
        {
            return "$name is required";
        }
        else 
        return false;
    }
}