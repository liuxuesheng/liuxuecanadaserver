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

$list = array();

//学校介绍
array_push($list, array('section' => '学校介绍'));

$sql1 = "SELECT id,news_title,news_imageURL FROM news ORDER BY id DESC LIMIT 4, 1";
$sql2 = "SELECT id,news_title FROM news ORDER BY id DESC LIMIT 1, 4";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $record1 = array('id' => $row1["id"], 'news_title' => $row1["news_title"], 'news_imageURL' => $row1["news_imageURL"]);
        array_push($list, $record1);
    }
}

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $record = array('id' => $row["id"], 'news_title' => $row["news_title"]);
        array_push($list, $record);
    }
}

//专业选择
array_push($list, array('section' => '专业选择'));

$sql3 = "SELECT id,news_title,news_imageURL FROM news ORDER BY id DESC LIMIT 2, 1";
$sql4 = "SELECT id,news_title FROM news ORDER BY id DESC LIMIT 1, 4";

$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
        $record3 = array('id' => $row3["id"]."3", 'news_title' => $row3["news_title"], 'news_imageURL' => $row3["news_imageURL"]);
        array_push($list, $record3);
    }
}

if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {
        $record4 = array('id' => $row4["id"]."4", 'news_title' => $row4["news_title"]);
        array_push($list, $record4);
    }
}

//签证信息
array_push($list, array('section' => '签证信息'));

$sql5 = "SELECT id,news_title,news_imageURL FROM news ORDER BY id DESC LIMIT 3, 1";
$sql6 = "SELECT id,news_title FROM news ORDER BY id DESC LIMIT 1, 4";

$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $record5 = array('id' => $row5["id"]."5", 'news_title' => $row5["news_title"], 'news_imageURL' => $row5["news_imageURL"]);
        array_push($list, $record5);
    }
}

if ($result6->num_rows > 0) {
    // output data of each row
    while($row6 = $result6->fetch_assoc()) {
        $record6 = array('id' => $row6["id"]."6", 'news_title' => $row6["news_title"]);
        array_push($list, $record6);
    }
}

//学业心得

//移民入籍新闻

//中介服务信息

	echo json_encode($list);
}
echo(returnNewsList())
?>
