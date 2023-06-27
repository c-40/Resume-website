<?php

$host="localhost";
$dbname="user_data";
$username="root";
$password=""; 
$conn=mysqli_connect(hostname:$host,username:$username,password:$password,database:$dbname);
if(mysqli_connect_errno())
{
    die("Coonnectiion error:".mysqli_connect_error());
}
echo "Sucessfully Connected";
?>