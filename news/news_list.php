<?php
header("Content-Type:text/html;charset=utf-8");

function returnNewsList(){

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql1 = "SELECT id,news_title,news_imageURL FROM news ORDER BY id DESC LIMIT 1";
$sql2 = "SELECT id,news_title FROM news ORDER BY id DESC LIMIT 1, 4";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$list = array();
$row1 = $result1->fetch_assoc();
$record1 = array('id' => $row1["id"], 'news_title' => $row1["news_title"], 'news_imageURL' => $row1["news_imageURL"]);
array_push($list, $record1);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $record = array('id' => $row["id"], 'news_title' => $row["news_title"]);
        array_push($list, $record);
    }
}

	echo json_encode($list);
}
echo(returnNewsList())
?>
