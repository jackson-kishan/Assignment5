<?php

$fp = "../Database/database.txt";

$fps = fopen($fp,"a");

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

                        if($change == 'admin') {
                        array_replace($user[3] , ['user']);
                        // header("location: ../admin.php");
                        } elseif($change == 'user') {
                         // array_replace($user[3] , ['admin']);
                        // header("location: ../admin.php");
                        }

                        
                     
                    }



                    // if(isset($_POST['change'])) {
                    //    $old_value = $_POST['old_value'];
                    //    $new_value = $_POST['new_value'];

                    //    $replace = str_replace($old_value, $new_value, $storedrole);
                      
                    //   file_put_contents($fps, explode(', ', $replace) );
                       
                    // }



                     endforeach;  
                        
                          //  if(isset($_POST['change'])) {
                          //   // $newData = isset($_POST['new_value']) ? $_POST['new_value'] : '';

                          //   if(isset($_GET['edit'])) {
                          //     $change = $_GET['edit'];
                          //   }

                           // var_dump(file_get_contents($fp));
                           // var_dump( explode(', ', file_get_contents($fp)));

                           

                     /*        while($line = file_get_contents($fp)) {
                             // list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $line);
                              

                               if($newData != '') {

                                $dataArr = explode(', ', $line);

                                $dataArr[3] = $newData;

                                
                                $storedData = [$storedname, $storedpassword, $storedemail,implode(', ', $dataArr)];

                                //$addData = implode(', ', $dataArr);

                                file_put_contents($fp, $addData);

                                header('location: ../admin.php');

                               }
                            }  */
 
                            // if($newData != '') {
                            //  $data = file_get_contents($fp);

                            //  $dataArr = explode(', ', $data);

                            //  $dataArr[3] = $newData;

                            //  $addData = implode(', ', $dataArr);

                            //  file_put_contents($fp, $addData);

                            //  header('location: ../admin.php');
                            // }


                          // }



                           //list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $data);
                          
                          
                          ?>
                   

                         <form action="" class="form m-5 p-5" method="post">

                        <select name="Change_role" id="">
                          <option value=""><?php echo $change;  ?></option>
                           <?php 
                          if($change == "admin") {
                             echo '<option value="user">User</option>';
                         } elseif($change == "user") { 
                         echo '<option value="admin" >Admin</option>';
                         }
                         
                           ?>
                        </select> 
                        <br><br>

                         <!-- <input type="text" class="form-control"  name="old_value" value="// echo $change; ?>"><br><br>
                         <input type="text" class="form-control"  name="new_value" value=""><br><br> -->
                         <button class="btn btn-success align-items-center" name="change">Change</button>
                         </form>
             </div>
     </div>
     </div>
</div>     
</body>
</html>