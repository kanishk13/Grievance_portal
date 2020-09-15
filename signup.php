<?php
$con=mysqli_connect("localhost","root","","localhost");
    if(!$con)
        echo "not connected in db";

$email=$_POST['uname'];
$pswd=$_POST['pswd'];
$conpass=$_POST['conpswd'];
$rollno=$_POST['rollno'];

$sql="INSERT INTO student_signup(email,password,conpass,rollno) VALUES ('$email','$pswd','$conpass','$rollno')";

if(mysqli_query($con,$sql))
    echo "query executed";
else 
    echo $con   ->error;

?>
