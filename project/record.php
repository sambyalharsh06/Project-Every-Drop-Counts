<?php
include "connection.php";
if($_SERVER["REQUEST_METHOD"=="POST"])
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $age=$_POST['Age'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $hospital=$_POST['hospital'];
    $Blood=$_POST['Blood'];
    $type=$_POST['type'];
}
?>