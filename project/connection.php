<?php
$servername="127.0.0.2:3307";
$username="root";
$password="";
$Database="Project1";

$conn=mysqli_connect($servername, $username, $password, $Database);
if($conn)
{
    echo "successfully connected";
}
else
{
    echo "Cannot connect";
}
?>