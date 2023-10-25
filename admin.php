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
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3">
                  <h2 class="text-center h2">Wellcome, Admin</h2>
                    
                    <a href="./include/create.php" class="btn btn-primary"> Add New Member</a>
                    <a href="logout.php" class="btn btn-danger float-end">Log Out</a>
                </div>
                   
                   <table class="table table-bordered table-striped">
                     <thead>
                        <tr>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           foreach ($users as $user):
                        
                            list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);
                          
                          ?>
                        <tr>
                            <td><?php echo $storedname; ?></td>
                            <td><?php echo $storedpassword; ?></td>
                            <td><?php echo $storedemail ?></td>
                            <td>
                                <?php
                                 echo $storedrole;
                                
                                 printf("  <a href='./include/update_role.php?edit=%s' class=' btn btn-warning float-end' title='update data' data-toggle='tooltip'>Change</a>" , $storedrole);
                                ?> 
                              
                             </td>
                            <td>
                              <?php printf("  <a href='./include/edit.php?edit=%s' class=' btn btn-success' title='update data' data-toggle='tooltip'>Edit</a>" , $storedrole); ?>
                              <?php printf("  <a href='./include/delete.php?delete=%s' class=' btn btn-danger' title='update data' data-toggle='tooltip'>Delete</a>" , $storedrole); ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                    
                     </tbody>

                   </table>
                   

               
            </div>
        </div>
  </div>

 


  </body>
  </html>