<?php
ini_set('display_errors', 1);

$server="localhost";
$username="root";
$password="";
$db="crudnext";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
echo "problem".mysqli_error($conn);
}