<?php
$con=mysqli_connect("localhost","root","","localhost");
    if(!$con)
        echo "not connected in db";


$email=$_POST['uname'];
$password=$_POST['pswd'];


$sql="SELECT email,password FROM student_signup";

    $result = mysqli_query($con,$sql);
 
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if($email==$row["email"] && $password==$row["password"])
        {    echo "welcome";
        header("location:complaint.html");
        }
        }
}
?>
