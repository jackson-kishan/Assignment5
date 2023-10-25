<?php

 session_start();


 if(isset($_POST['submit'])) {
     $username = trim($_POST['username']);
     $password = trim($_POST['password']);
     $email = trim($_POST['email']);



  $data = "$username, $password, $email, user \n";
  $dataArr = explode(",  ", $data);

  file_put_contents("../Database/database.txt" , $dataArr , FILE_APPEND);
     
  header("location:../admin.php");
   
 }
   


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Authentication and Role Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
   <form action="" class="form m-5 p-5 " method="post">
    <h2 class="h2 text-center">Create New Member</h2>

   <div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Enter your name...">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email...">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password...">
</div>
 <button type="submit" name="submit" class="btn btn-success">Submit</button>

 <br><br>

   </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>