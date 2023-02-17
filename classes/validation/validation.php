<?php

class Validation{
    private $errors = [];

    public function validate($key , $value , $rules){

        foreach($rules as $rule){
            $object = new $rule;
            $error = $object->check($key,$value);
            if($error!=false){
                $this->errors[] = $error;
            }
        }
    }

    public function getError(){
        $this->errors;
    }
}