<?php
require "config/DB.php";

use App\Support\Database\DB;


$data = DB::Select("select * from users");

echo mysqli_num_rows($data);
