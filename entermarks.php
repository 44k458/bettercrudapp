<?php
include 'connect.php';
ini_set('display_errors', 1);

$val=$_GET['choice'];
     if($val=="science")
     {echo "<script> location.href='http://localhost/crudthree/science.html'; </script>";
        exit;

     }      
     elseif ($val=="commerce")
     {
       echo "<script> location.href='http://localhost/crudthree/commerce.html'; </script>";
        exit;
     
     }
     elseif($val=="arts")
     {
       echo "<script> location.href='http://localhost/crudthree/arts.html'; </script>";
        exit;

     }
	
?>