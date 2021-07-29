<?php
namespace techStore\classes;

class Request
{
    public function get(string $key)
    {
        return $_GET[$key];
    }
    public function getHas(string $key) :bool
    {
        return isset( $_GET[$key]);
    }
    public function post(string $key)
    {
        return $_POST[$key];

    }
    public function getClean(string $key)
    {
        return  trim( htmlspecialchars($_GET[$key]));
    }

    public function postClean(string $key)
    {
      return  trim( htmlspecialchars($_POST[$key]));
    }
    public function postHas(string $key) :bool
    {
        return isset( $_POST[$key]);
    }
}
