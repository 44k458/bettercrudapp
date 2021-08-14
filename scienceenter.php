<?php
ini_set('display_errors', 1);

include 'connect.php';
$p_marks=$_GET['pp'];
$c_marks=$_GET['cc'];
$m_marks=$_GET['mm'];
$nm=$_GET['nm'];
$rn=$_GET['rn'];
$ins;
$feed;
if($p_marks>100||$p_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";
}
elseif($c_marks>100||$c_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";
}
elseif($m_marks>100||$m_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";
}
else
{
$ins="insert into crudscience values($rn,'$nm',$p_marks,$c_marks,$m_marks);";
$feed=mysqli_query($conn,$ins);
if($feed)
{
	echo "record inserted successfully!!!";
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";
}
else
{echo "problem".mysqli_error($conn);
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/science.html';; }, 3000);</script>";

}

}




?>