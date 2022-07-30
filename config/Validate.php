<?php

namespace APP\Support\Validate;

class Validator{
    public static function  clean ($input){
        return addslashes(trim(htmlspecialchars($input)));
    }

    public static function validate_email ($input){
        if(empty($input)){
            return "email can not be empty";
        }elseif(!filter_var($input,FILTER_VALIDATE_EMAIL)){
            return "you must enter valid mail";
        }
        return true;
    }

    public static function validate_password ($input){
        if(empty($input)){
            return "password can not be empty";
        }else if(strlen($input) < 6){
            return "password can't be less than 6 charcter";
        }
        return true;
    }

    public static function validate_text ($input, $input_validate){
        if(empty($input)){
            return "$input_validate can not be empty";
        }elseif(gettype($input) != "string" ){
            return "you must enter valid $input_validate";
        }
        return true;
    }
    
    public static function validate_image ($ext, $size, $error){
        if($error != 0){
            return " Your image has an error";
        }elseif(!in_array($ext,['jpg','png','jpeg'])){
            return "you must enter valid image with extension png, jpg or jpeg";
        } elseif (($size/(1024*1024))> 2){
            return "your image must not exceed 2 MB";
        }
        return true;
    }

    // public static function validateDate($date,$error,$format = 'Y-m-d'){
    //     $d = DateTime::createFromFormat($format, $date);
    //     if(!($d && $d->format($format) === $date)){
    //         return "You must enter valid $error";
    //     }
    //     return true;
    // }
}