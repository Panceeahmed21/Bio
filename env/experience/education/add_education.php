<html>
    <title>
        Add Education 
    </title>
</html>
<?php

require("../../../config/Validate.php");
require("../../../config/Errors.php");
require("../../../config/DB.php");

use APP\Support\Database\DB;
use  APP\Support\Validate\Validator;

$university =Validator::clean($_POST["uni"]);
$startIn=Validator::clean($_POST["start"]);
$EndIn=Validator::clean($_POST["End"]);
$Summary=Validator::clean($_POST["summary"]);

$errors=array();

 array_push($errors,Validator::validate_text($university,"university"));

array_push($errors,Validator::validate_text($Summary,"summary"));

$result =DB::create("INSERT INTO `education`(`Unversity`, `start_in`, `end_in`, `summary`) VALUES ('$university','$startIn','$EndIn','$Summary')");

if ($result==true){
    echo "Connection sucessfully";

}
else {
    echo "Connection failed";

}
