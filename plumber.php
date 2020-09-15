

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
$mysqli = new mysqli("localhost", "root", "", "localhost");
 
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
$sql = "SELECT * FROM complaint where  name='Plumber'";
if($result = $mysqli->query($sql)){
    if($result->num_rows >0)
    {
        echo "<table class='table table-dark table-hover'>";
            echo "<tr>";
                echo "<th>Serial Number</th>";
                echo "<th>Persons </th>";
                echo "<th>Problem in discirption</th>";
                echo "<th>IMAGE</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>".$row['sno']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>" . $row['image'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
</body>
</html>


