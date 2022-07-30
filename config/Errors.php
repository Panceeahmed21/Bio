<?php

namespace APP\Support\Validate;

 class Errors{

   public static function check_error($errors){
        foreach($errors as $error){
            if(gettype($error)== "string" || $error ===false){
                return false;
            }
        }
        return true;
    }
    
 }