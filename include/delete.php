<?php

$fp = "../Database/database.txt";

$users = file($fp , FILE_IGNORE_NEW_LINES);



foreach ($users as $user):
                        
    list($storedname, $storedpassword, $storedemail, $storedrole) = explode(', ', $user);
  
   // var_dump($storedname);

    if(isset($_GET['delete'])) {
        unset($_GET['delete']);
       
    }

endforeach;  

?>