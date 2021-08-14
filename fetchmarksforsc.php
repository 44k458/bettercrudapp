<?php

ini_set('display_errors', 1);

include 'connect.php';
$val=$_GET['roll'];
$ask='select * from crudscience where roll_number="'.$val.'";';
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SCIENCE MARKS</title>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<style>
	#zero
	{
		background-color: black;
		color: whitesmoke;
		font-size: 30px;
	}

</style>
<body>
<div id="zero">
	
</div>
    <div id="gobackhome"><button id="home"><a href="http://localhost/crudthree/index.html">GO BACK HOME</button></div>
	</div>
</body>
<script>
	$(document).ready(function()
{

   $("#zero").addClass("animate__animated animate__bounceIn");
   });



</script>

</html>