<?php
header("Content-Type:text/html;charset=utf-8");
$recordPage = isset($_GET['page']) ? $_GET['page'] : '';

function returnPage1($page){

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
$sql = "SELECT news_title FROM news WHERE id = $page";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$news_title = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $news_title .= $row["news_title"] . ",";
    }
}

$news_title = substr($news_title, 0, -1);

//subtitle
$sql = "SELECT news_subtitle FROM news WHERE id = $page";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$news_subtitle = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $news_subtitle .= $row["news_subtitle"] . ",";
    }
}

$news_subtitle = substr($news_subtitle, 0, -1);

//image
$sql = "SELECT news_imageURL FROM news WHERE id = $page";

$result = $conn->query($sql);
$imageURL = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $imageURL .= $row["news_imageURL"] . ",";
    }
}

$imageURL = substr($imageURL, 0, -1);

//content
$sql = "SELECT news_content FROM news WHERE id = $page";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result = $conn->query($sql);
$nametring = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nametring .= $row["news_content"] . ",";
    }
}

$nametring = substr($nametring, 0, -1);


$item0 = array(
    'type' => 'webview',
    'url' => $imageURL);


$item1 = array(
    'type' => 'body_news',
    'name' => $nametring);

$item2 = array(
    'type' => 'title_news',
    'name' => $news_title);

$item3 = array(
    'type' => 'subtitle_news',
    'name' => $news_subtitle);


$list = array($item0, $item1,$item2,$item3);
	echo json_encode($list);
}
echo(returnPage1($recordPage))
?>

