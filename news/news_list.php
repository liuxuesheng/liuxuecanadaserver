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

$sql1 = "SELECT id,news_title,news_imageURL FROM news_university ORDER BY id DESC LIMIT 1";
$sql2 = "SELECT id,news_title FROM news_university ORDER BY id DESC LIMIT 1, 4";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $record1 = array('item_section' => 'news_university', 'id' => $row1["id"], 'news_title' => $row1["news_title"], 'news_imageURL' => $row1["news_imageURL"]);
        array_push($list, $record1);
    }
}

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $record = array('item_section' => 'news_university', 'id' => $row["id"], 'news_title' => $row["news_title"]);
        array_push($list, $record);
    }
}

//专业选择
array_push($list, array('section' => '专业选择'));

$sql3 = "SELECT id,news_title,news_imageURL FROM news_program ORDER BY id DESC LIMIT 1";
$sql4 = "SELECT id,news_title FROM news_program ORDER BY id DESC LIMIT 1, 4";

$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
        $record3 = array('item_section' => 'news_program', 'id' => $row3["id"], 'news_title' => $row3["news_title"], 'news_imageURL' => $row3["news_imageURL"]);
        array_push($list, $record3);
    }
}

if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {
        $record4 = array('item_section' => 'news_program', 'id' => $row4["id"], 'news_title' => $row4["news_title"]);
        array_push($list, $record4);
    }
}

//签证信息
array_push($list, array('section' => '签证信息'));

$sql5 = "SELECT id,news_title,news_imageURL FROM news_visa ORDER BY id DESC LIMIT 1";
$sql6 = "SELECT id,news_title FROM news_visa ORDER BY id DESC LIMIT 1, 4";

$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $record5 = array('item_section' => 'news_visa', 'id' => $row5["id"], 'news_title' => $row5["news_title"], 'news_imageURL' => $row5["news_imageURL"]);
        array_push($list, $record5);
    }
}

if ($result6->num_rows > 0) {
    // output data of each row
    while($row6 = $result6->fetch_assoc()) {
        $record6 = array('item_section' => 'news_visa', 'id' => $row6["id"], 'news_title' => $row6["news_title"]);
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
