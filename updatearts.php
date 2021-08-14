<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['Rn'];
$ds=$_GET['ds'];
$eng=$_GET['eng'];
$psy=$_GET['psy'];
$rows;
if(isset($val))
{
 if(isset($ds))
 {
   $ask='update crudarts set Ds="'.$ds.'" WHERE roll_number="'.$val.'"';
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
   }
  }
  if(isset($eng))
  {
  	$ask='update crudarts set Eng="'.$eng.'" WHERE roll_number="'.$val.'"';
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
    if(isset($psy))
  {
  	$ask='update crudarts set Psy="'.$psy.'" WHERE roll_number="'.$val.'"';
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
}}  }

else
{
   echo "Please enter roll number";
}






?>