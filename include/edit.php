<?php

$fp = "../Database/database.txt";


$users = file($fp , FILE_IGNORE_NEW_LINES);

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
     <div class="d-flex align-items-center justify-content-center"> 
        <div class="mt-4 mb-6">
                <div class="shadow rounded-2">
                    <?php

                  // print_r($users[0]);
                        
                        foreach ($users as $user):
                        
                          list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);
                        
                         // var_dump($storedname);



                    


                endforeach;  
                        
                        
                          
                          ?>
                   

      <form action="" class="form m-5 p-5" method="post">

        <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="new_username" class="form-control" value="<?php echo $storedname; ?>" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="new_email" class="form-control" value="<?php echo $storedemail; ?>" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" name="new_password" class="form-control" value="<?php echo $storedpassword; ?>" id="formGroupExampleInput2" placeholder="Enter your password...">
        </div>

                    
        <button class="btn btn-success align-items-center" name="change">Change</button>
       </form>
        </div>
     </div>
     </div>
</div>     
</body>
</html>