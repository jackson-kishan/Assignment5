<?php

$fp = "../Database/database.txt";
$fps = fopen($fp, 'a');

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
                           foreach ($users as $user):
                        
                            list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);
                          
                      if(isset($_GET['edit'])) {
                          $change = $_GET['edit'];
                      } 

                      if(isset($_POST['change'])) {
                         $old_value = $_POST['old_value'];
                         $new_value = $_POST['new_value'];

                         $replace = str_replace($old_value, $new_value, $storedrole);
                        
                        file_put_contents($fps, explode(', ', $replace) );
                         
                      }
                          ?>
                         <?php endforeach; ?>   

                         <form action="" class="form m-5 p-5" method="post">
                         <input type="text" class="form-control"  name="old_value" value="<?php echo "$storedname" . ', ' . "$storedpassword" . ', ' . "$storedemail" . ', ' . "$storedrole" ?>"><br><br>
                         <input type="text" class="form-control"  name="new_value" value=""><br><br>
                         <button class="btn btn-success align-items-center" name="change">Change</button>
                         </form>
             </div>
     </div>
     </div>
</div>     
</body>
</html>