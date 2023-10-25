<?php

session_start();

$fp = "./Database/database.txt";

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
   <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3">
                    
                    <a href="logout.php" class="btn btn-danger float-end">Log Out</a>
                </div>
                   
                   <table class="table table-bordered table-striped">
                     <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        
                          
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        
                      foreach ($users as $user):
                        
                        list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);
                      
                          ?>

                        <tr>
                            <td><?php echo $storedname ?></td>
                            <td><?php echo $storedemail ?></td>
                            
                        </tr>

                        <?php endforeach; ?>
                    
                     </tbody>

                   </table>
                   

               
            </div>
        </div>
  </div>
</div>

  </body>
  </html>