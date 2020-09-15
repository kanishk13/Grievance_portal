<?php
$con=mysqli_connect("localhost","root","","localhost");
    if(!$con)
        echo "not connected in db";

$email=$_POST['uname'];
$pswd=$_POST['pswd'];

$sql="INSERT INTO admin_table(email,password) VALUES ('$email','$pswd')";

if(mysqli_query($con,$sql))
    echo "query executed";
else 
    echo $con   ->error;

?>
