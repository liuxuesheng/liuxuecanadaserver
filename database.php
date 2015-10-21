<?php

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Database connected!!!"."<br>";

$sql = "SELECT english_name FROM university";
$result = $conn->query($sql);
$nametring = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nametring .= $row["english_name"] . ",";
    }
    $nametring = substr($nametring, 0, -1);
    echo $nametring;
} else {
    echo "0 results";
}



/*
$titlestring = "";
while($row = mysqli_fetch_array($result))
{
  $titles .= $row['title'] . ", ";
}
$titlestring = substr($titlestring, 0, -2);*/


$conn->close();
?>
