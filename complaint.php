<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","localhost");
    if(!$con)
        echo "not connected in db";

$email=$_POST['problem'];
$pswd=$_POST['second'];
$var="image.txt";
$sql="INSERT INTO complaint(name,description,image) VALUES ('$email','$pswd','$var')";

if(mysqli_query($con,$sql))
    echo "";
else 
    echo $con   ->error;

?>

    
<div class="container">
  <h2>COMPLAINT DONE</h2>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Registered</th>
        <th>Date</th>
        <th>Email</th>
          <th>WAITING</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mary</td>
        <td>
<?php
    $currentDateTime = date('Y-m-d H:i:s');
    echo $currentDateTime;
?></td>
          <td>Moe</td>
          <td><button type="button" class="btn btn-danger">Waiting</button> </td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>