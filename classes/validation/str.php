<?php
namespace techStore\classes\validation;

class Str implements validationRule
{
    public function check(string $name,$value){
        if (!is_string($value)){
            return "$name must be string ";

        }
        else 
        return false;
    }
}