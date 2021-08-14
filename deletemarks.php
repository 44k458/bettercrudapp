<?php
ini_set('display_errors', 1);

include 'connect.php';

$ch=$_GET['choice'];
echo $ch;
if($ch=="sc")
{

   echo "<script> location.href='http://localhost/crudthree/deletescience.html'; </script>";
}
elseif($ch=="co")
{
  echo "<script> location.href='http://localhost/crudthree/deletecommerce.html'; </script>";
}
elseif ($ch=="ar")
{
 
  echo "<script> location.href='http://localhost/crudthree/deletearts.html'; </script>";
}




?>