<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['roll'];
$ask='select * from crudarts where roll_number="'.$val.'";';
$result=mysqli_query($conn,$ask);
$row;
if (mysqli_num_rows($result) > 0) 
{	 while($row = mysqli_fetch_assoc($result)) 
	{
      echo "id: " . $row["roll_number"]."<br>";
      echo "Name: ".$row["name"]."<br>";
      echo "Physics: ".$row["Psy"]."<br>";
      echo "Chemistry: ".$row["Eng"]."<br>";
      echo "Maths: ".$row["Dr"]."<br>";

  }
}
else
{		
	echo "no records found";
}
?>
