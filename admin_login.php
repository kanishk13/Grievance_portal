<?php
$con=mysqli_connect("localhost","root","","localhost"); //database Connection 
    if(!$con)
        echo "not connected in db"; //if connection is not established throw an error

$email=$_POST['uname'];
$pswd=$_POST['pswd'];

$sql="INSERT INTO admin_table(email,password) VALUES ('$email','$pswd')";  //if connection is established insert into to the table 

if(mysqli_query($con,$sql))
    echo "query executed"; //and show a message that table has been updated 
else 
    echo $con   ->error;   //if not show why it is showing that error

?>
