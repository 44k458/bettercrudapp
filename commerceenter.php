<?php
ini_set('display_errors', 1);

include 'connect.php';
$bk_marks=$_GET['bk'];
$eco_marks=$_GET['ec'];
$stats_marks=$_GET['st'];
$nm=$_GET['nm'];
$rn=$_GET['rn'];
$ins;
$feed;
if($bk_marks>100||$bk_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/commerce.html';; }, 3000);</script>";
}
elseif($eco_marks>100||$eco_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/commerce.html'; }, 3000);</script>";
}
elseif($stats_marks>100||$stats_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/commerce.html';; }, 3000);</script>";
}
else
{
$ins="insert into crudcommerce values($rn,'$nm',$bk_marks,$eco_marks,$stats_marks);";
$feed=mysqli_query($conn,$ins);
if($feed)
{
	echo "record inserted successfully!!!";
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/commerce.html';; }, 3000);</script>";
}
else
{echo "problem".mysqli_error($conn);
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";

}

}




?>