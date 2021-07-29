<?php
namespace techStore\classes;

class Session
{
    public function __construct(){
        if (session_status()==PHP_SESSION_NONE){
              session_start();
        }
    }
    
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }
 
    public function get(string $key)
    {
        return $_SESSION[$key];
    }
    
    public function has(string $key)
    {
        return isset($_SESSION[$key]);
    }
    
    public function remove(string $key)
    {
        unset( $_SESSION[$key]);
    }
    
    public function destroy(string $key)
    {
       $_SESSION=[]; // 3amleen d 3lshan lw bynfz elscript my7slsh crash lma yegi ynfz d 
       session_destroy($_SESSION[$key]);
    } 
}
