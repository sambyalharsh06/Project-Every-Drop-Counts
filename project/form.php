<?php
 error_reporting(0);
 if(!isset($_POST['insert']))
 {
    $email=$_POST['email'];
    $name=$_POST['name'];

    echo "Entered successfully";
    $servername="127.0.0.2:3307";
    $username="root";
    $password="";
    $Database="employee";

    $conn=mysqli_connect($servername, $username, $password, $Database);
    if($conn)
    {
       echo "successfully connected";
    }
    else
    {
       echo "Cannot connect";
    }

    $quer="INSERT INTO `form` (`email`, `name`) VALUES ('$email', '$name')";
    $res=mysqli_query($conn, $quer);
    if($res)
    {
        echo "succesfully recorded";
    }
    else
    {
        echo "Cannot record";
    }
}
?>