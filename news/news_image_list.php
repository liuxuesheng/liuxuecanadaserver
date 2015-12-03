<?php
header("Content-Type:text/html;charset=utf-8");

function returnNewsImageList(){

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id,news_imageURL FROM news ORDER BY id DESC LIMIT 3";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$list = array();


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $record = array('id' => $row["id"], 'news_imageURL' => $row["news_imageURL"]);
        array_push($list, $record);
    }
}

	echo json_encode($list);
}
echo(returnNewsImageList())
?>
