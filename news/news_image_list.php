<?php
header("Content-Type:text/html;charset=utf-8");
$whichImage = isset($_GET['image']) ? $_GET['image'] : '';

function returnNewsImageList($imageOrder){

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id,news_imageURL,news_title FROM news ORDER BY id DESC LIMIT ".$imageOrder.", 1";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$list = array();


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $record = array('section' => 'news', 'id' => $row["id"], 'news_imageURL' => $row["news_imageURL"], 'news_title' => $row["news_title"]);
        array_push($list, $record);
    }
}

	echo json_encode($list);
}
echo(returnNewsImageList($whichImage))
?>
