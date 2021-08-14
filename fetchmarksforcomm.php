<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['roll'];
$ask='select * from crudcommerce where roll_number="'.$val.'";';
$result=mysqli_query($conn,$ask);
$row;
if (mysqli_num_rows($result) > 0) 
{	 while($row = mysqli_fetch_assoc($result)) 
	{
      echo "id: " . $row["roll_number"]."<br>";
      echo "Name: ".$row["name"]."<br>";
      echo "Physics: ".$row["Physics"]."<br>";
      echo "Chemistry: ".$row["Chemistry"]."<br>";
      echo "Maths: ".$row["Maths"]."<br>";

  }
}
else
{		
	echo "no records found";
}
?>