<?php
header("Content-Type:text/html;charset=utf-8");
//$recordPage = isset($_GET['page']) ? $_GET['page'] : '';
//$section = isset($_GET['section']) ? $_GET['section'] : '';

function returnTestPage(){

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//title
$sql = "SELECT name, imageURL FROM test_all WHERE id = 1";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$name = "";
$imageURL = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name .= $row["name"];
        $imageURL .= $row["imageURL"];
    }
}

$list = array(array('name' => $name, 'imageURL' => $imageURL));
	echo json_encode($list);
}
echo(returnTestPage())
?>
