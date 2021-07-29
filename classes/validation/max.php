<?php
namespace techStore\classes\validation;

class Max implements validationRule
{
    public function check(string $name,$value){
        if (strlen($value)>255)
        {
            return "$name must be less tthan 255 character ";
        }
        else 
        return false;
    }
}