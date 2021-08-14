<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['Rn'];
// $ds=$_GET['ds'];
// $eng=$_GET['eng'];
// $psy=$_GET['psy'];
$rows;
$chk;
$row;
if(isset($val))
{

  $chk="select * from crudscience";
  $row=mysqli_query($conn,$chk);
  echo $row;
  // $ask='DELETE FROM crudscience where roll_number="'.$val.'"';
  //  $doit=mysqli_query($conn,$ask);
  //  if($doit)
  //  {
   
  //   $rows=mysqli_affected_rows($conn);
  //     if($rows==0)
  //     {
  //        echo "Please enter valid details";
  //       echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatearts.html';; }, 3000);</script>";
  //       exit;
  //     }
  //     else
  //     {
  //     	echo "records updated!!";
  //     	        echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/updatearts.html';; }, 3000);</script>";
  //     }
  //  }
  }


else
{
   echo "Please enter roll number";
}






?>