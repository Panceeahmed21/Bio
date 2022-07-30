<?php

use APP\Support\Validate\Errors;
use APP\Support\Validate\Validator;
use APP\Support\Database\DB;

require("../../config/Validate.php");
require("../../config/Errors.php");
require("../../config/DB.php");


$job = Validator::clean($_POST["job"]);
$company = Validator::clean($_POST["company"]);
$summary = Validator::clean($_POST["summary"]);
$start = Validator::clean($_POST["start"]);
$end = Validator::clean($_POST["End"]);

$errors =array();

array_push($errors,Validator::validate_text($job,"Job"));
array_push($errors,Validator::validate_text($company,"company"));
array_push($errors,Validator::validate_text($summary,"Summary"));


if(Errors::check_error($errors)){
    $result = DB::create("insert into experience
    (job_title, company, start_in, End_in, summary)
     values('$job','$company','$start', '$end', '$summary')");

     if($result == true){
        echo "Success";
     }
     else{
        echo "Fail";
     }

     var_dump($result);
}

