<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['Rn'];
$phy=$_GET['Physics'];
$chem=$_GET['Chemistry'];
$math=$_GET['Maths'];
$rows;
if(isset($val))
{
 if(isset($phy))
 {
   $ask='update crudscience set Physics="'.$phy.'" WHERE roll_number="'.$val.'"';
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
  if(isset($chem))
  {
  	$ask='update crudscience set Chemistry="'.$chem.'" WHERE roll_number="'.$val.'"';
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
    if(isset($math))
  {
  	$ask='update crudscience set Maths="'.$math.'" WHERE roll_number="'.$val.'"';
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
else
{
   echo "Please enter roll number";
}
}








?>