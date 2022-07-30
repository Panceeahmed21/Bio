<?php
require("../view/Header.php");
use APP\View\Panel\Header;
Header::init("Add Education");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add education</title>
</head>
<body>
    
<div class="container">
<form method="post" action="../../env/experience/education/add_education.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> University</label>
    <input type="text" name="uni" class="form-control" id="exampleInputEmail1" maxlength="100" minlength="3" require>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start Date</label>
    <input type="date" name="start" class="form-control" id="exampleInputEmail1 " require >
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">End Date</label>
    <input type="date"name="End" class="form-control" id="exampleInputEmail1" require>
</div>

  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">summary</label>
    <textarea      name="summary"  class="form-control" id="exampleInputEmail1" rows="4" maxlength="250" require> </textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>