<?php
ini_set('display_errors', 1);

include 'connect.php';
$psy_marks=$_GET['psy'];
$eng_marks=$_GET['eng'];
$dr_marks=$_GET['dr'];
$nm=$_GET['nm'];
$rn=$_GET['rn'];
$ins;
$feed;
if($psy_marks>100||$psy_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/arts.html';; }, 3000);</script>";
}
elseif($eng_marks>100||$eng_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/arts.html'; }, 3000);</script>";
}
elseif($dr_marks>100||$dr_marks<0)
{
	echo "Please enter valid marks";
	echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/arts.html';; }, 3000);</script>";
}
else
{
$ins="insert into crudarts values($rn,'$nm',$psy_marks,$eng_marks,$dr_marks);";
$feed=mysqli_query($conn,$ins);
if($feed)
{
	echo "record inserted successfully!!!";
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/arts.html';; }, 3000);</script>";
}
else
{echo "problem".mysqli_error($conn);
   echo "<script>setTimeout(function(){  location.href='http://localhost/crudthree/arts.html';; }, 3000);</script>";

}

}




?>
