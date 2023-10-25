<?php 

  session_start();

if(isset($_POST['submit'])) {
        $fp = "./Database/database.txt";
 
        $email = $_POST['email'];
        $password = $_POST['password'];

  /*     while($data = json_decode(file_get_contents($fp), true)) {
          if($data['email'] == $email && $data['password'] == $password) {
              header("Location: admin.php");
          }

      } */

      $users = file($fp , FILE_IGNORE_NEW_LINES);

      foreach ($users as $user) {
        
        list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);

        if($email == $storedemail && $password == $storedpassword) {
           $_SESSION['username'] = $storedname;

           if($storedrole == "admin"){
            header('Location:admin.php');
           } else {
            header('Location: users.php');
           }
        }
      }
      
      
        
       /*  $data = fgets($fp); 
          $users = explode(', ', $data);
          //printf("%s, %s %s %s", $users[0], $users[1], $users[2], $users[3]);

       // $data1 =  ;
          // if($user[3] == "admin" && $user[2] == $email && $user[1] == $password) {
          //   header("Location: admin.php");
          // } elseif($user[3] == "user"  && $user[2] == $email && $user[1] == $password) {
          //   header("Location: user.php");
          // } else {
          //   header("Location: index.php");
          // }

          if(printf("%s <br>", $users[2]) == $_POST['email'] ) {
            echo "Hello";
          }   

          */
        

    

        // if("admin@gmail.con" == $_POST['email']  && "1234" == $_POST['password']) {
        //   header("Location:admin.php");
        // }
  
    
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
   <div class="m-5 p-5">
    <h2 class="h2 text-center">Login Form</h2>
    <form action="" method="post">
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email..">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password...">
</div>
<button type="submit" name="submit" class="btn btn-success">Submit</button>

 <br><br>

 <p>Don't Have An Account?  <a href="index.php">Register</a></p>
   </form>
  </div>
  </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>