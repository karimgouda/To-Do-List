<?php
require_once "validator.php";
 class Required implements Validator
 {
    public function check($key, $value)
    {
        if(empty($value)){
            return  "$key title is required";
        }else{
            return false;
        }
      
    }
 }