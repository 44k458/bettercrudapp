<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['Rn'];
$bk=$_GET['Bk'];
$eco=$_GET['Eco'];
$stats=$_GET['Stats'];
$rows;
if(isset($val))
{
 if(isset($bk))
 {
   $ask='update crudcommerce set bk="'.$bk.'" WHERE roll_number="'.$val.'"';
   $doit=mysqli_query($conn,$ask);
   if($doit)
   {
   
    $rows=mysqli_affected_rows($conn);
      if($rows==0)
      {
         echo "Please enter valid details";
        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
        exit;
      }
      else
      {
      	echo "records updated!!";
      	        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
      }
   }
  }
  if(isset($eco))
  {
  	$ask='update crudcommerce set eco="'.$eco.'" WHERE roll_number="'.$val.'"';
   $doit=mysqli_query($conn,$ask);
   if($doit)
   {
   
    $rows=mysqli_affected_rows($conn);
      if($rows==0)
      {
         echo "Please enter valid details";
        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
        exit;
      }
      else
      {
      	echo "records updated!!";
      	        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
      }
  }}
    if(isset($stats))
  {
  	$ask='update crudcommerce set stats="'.$stats.'" WHERE roll_number="'.$val.'"';
   $doit=mysqli_query($conn,$ask);
   if($doit)
   {
   
    $rows=mysqli_affected_rows($conn);
      if($rows==0)
      {
         echo "Please enter valid details";
        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
        exit;
      }
      else
      {
      	echo "records updated!!";
      	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatescience.html';; }, 3000);</script>";
      }
}}  }

else
{
   echo "Please enter roll number";
}






?>