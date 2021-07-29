<?php
namespace techStore\classes\validation;

class Email implements validationRule
{
    public function check(string $name,$value){
        if (! filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            return "$name must be valid email";
        }
        else 
        return false;
    }
}