<?php
namespace techStore\classes\validation;

class Validitor
{
    private $errors = [];
    public function validate($name, $value, array $rules)
    {
        foreach ($rules as $rule) {
            // kan 3andi mohskela en kol ma azawed rule htdar a3ml if statment leha 
            // f3lshan keda ha5leha dynamiv w aktb $rule badl esm elclass

            // if ($rule == "required") {
            //     $obj = new Required;
            // } elseif ($rule == "numeric") {
            //     $obj = new Numeric;
            // } elseif ($rule == "max") {
            //     $obj = new Max;
            // } elseif ($rule == "email") {
            //     $obj = new Email;
            // }
            $obj = new $rule;

            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break; // b3ml break 3lshan ytl3li awel error bs
            }
        }
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function hasError() :bool // hena b return 3aks elli btrg3o elfunction 
    {
        if (empty($this->errors)) {
            return false;
        } else
            return true;
    }
    // hya hya 
    // return ! empty($this->errors);
}
