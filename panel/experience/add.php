<?php

use APP\View\Panel\Header;

require("../view/Header.php");

Header::init("Add Experience");
?>
<div class="container">
<form method="post" action="../../env/experience/add_experience.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job title</label>
    <input type="text" name="job" class="form-control" id="exampleInputEmail1" maxlength="100" minlength="3">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Company Title</label>
    <input type="text" name="company" class="form-control" id="exampleInputEmail1" maxlength="100" minlength="3">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start Date</label>
    <input type="date" name="start" class="form-control" id="exampleInputEmail1" >
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">End Date</label>
    <input type="date" name="End" class="form-control" id="exampleInputEmail1" >
</div>

  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">summary</label>
    <textarea name="summary" class="form-control" id="exampleInputEmail1" rows="4" maxlength="250"> </textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>