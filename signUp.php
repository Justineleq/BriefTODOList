<?php


if(!empty (
isset ($_POST['firstName']) &&
isset ($_POST['lastName']) &&
isset ($_POST['username']) && 
isset ($_POST['email'])));
?>







<form class="row g-3" id=signUpForm>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstName" value="Enter name here" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastName" value="Enter last name here" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" value="Enter name here" required>
    <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" value="mynameis@gmail.com" required>
  </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Sign up!</button>
  </div>
</form>