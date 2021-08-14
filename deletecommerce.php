<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['Rn'];
$rows;

    if(isset($val))
  {
  	$ask='delete from crudcommerce WHERE roll_number="'.$val.'"';
   $doit=mysqli_query($conn,$ask);
   if($doit)
   {
   
    $rows=mysqli_affected_rows($conn);
      if($rows==0)
      {
         echo "Please enter valid details";
        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatearts.html';; }, 3000);</script>";
        exit;
      }
      else
      {
      	echo "records updated!!";
      	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatearts.html';; }, 3000);</script>";
      }
}}  
else
{
   echo "Please enter roll number";
}






?>