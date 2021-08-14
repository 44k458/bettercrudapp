<?php
ini_set('display_errors', 1);

include 'connect.php';

$ch=$_GET['choice'];
echo $ch;
if($ch=="sc")
{
   echo "<script> location.href='http://localhost/crudthree/fetchscience.html'; </script>";
}
elseif($ch=="co")
{
  echo "<script> location.href='http://localhost/crudthree/fetchcommerce.html'; </script>";
}
elseif ($ch=="ar")
{
  echo "<script> location.href='http://localhost/crudthree/fetcharts.html'; </script>";
}




?>