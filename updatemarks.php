<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['choice'];

if($val=="science")
     {echo "<script> location.href='http://localhost/crudthree/updatescience.html'; </script>";
        exit;

     }      
     elseif ($val=="commerce")
     {
       echo "<script> location.href='http://localhost/crudthree/updatecommerce.html'; </script>";
        exit;
     
     }
     elseif($val=="arts")
     {
       echo "<script> location.href='http://localhost/crudthree/updatearts.html'; </script>";
        exit;

     }

?>
