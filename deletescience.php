<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FETCH MARKS</title>
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
body
{
	background-color: black;
	color: whitesmoke;
	text-align: center;
}
#one
{
	background-color: grey;
	color: black;
}
input[type="text"]
{
width: 20px;
border: none;
background-color: whitesmoke;
}
input[type="number"]
{
  background-color: whitesmoke;
  border: none;
}
input[type="submit"]
{
	height: 50px;
	width: 200px;
	border: none;
	font-size: 30px;
	margin-top: 30px;
}
#inputfields
{
	margin-top: 50px;
}
#s,#roll_no
{
    font-size: 30px;
	line-height: 50px;
}
#note
{
font-family: 'Quicksand', sans-serif;
font-size: 40px;
}
a
{
	 font-size: 30px;
	    text-decoration: none
	}
#gobackhome
{

    text-align: center;
    margin-top: 30px;
}
#home
{
    height: 100px;
    border: none;
    width: 300px;
    background-color: whitesmoke;
    color: black;
    text-decoration: none;
    text-align: center; 
}
</style>
<body>
<div id="zero">
	
  <div id="one">
  <form method="$_GET" action="deletearts.php"><br><br><br>
  <div id="note">Please enter the roll number :</div><div id="inputfields">
    
  <input type="text" value="SC" id="s"><input type="number" name="roll" id="roll_no"><br>
  <input type="submit">
  </div>
  </form>
  </div>
    <div id="gobackhome"><button id="home"><a href="http://localhost/crudthree/index.html">GO BACK HOME</button></div>
	</div>
</div>
</body>
<script>
	$(document).ready(function()
{

   $("#zero").addClass("animate__animated animate__bounceIn");
   });



</script>
</html>