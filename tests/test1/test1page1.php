<?php
header("Content-Type:text/html;charset=utf-8");

function returnPage1(){
$item0 = array('id' => 100,
    'type' => 'textview',
    'name' => '毕业院校',
    'relation' => '0',
    'relationid' => '0',
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 101,
    'type' => 'textview',
    'name' => '1/6',
    'relation' => '1',
    'relationid' => '100',
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 102,
    'blockbyid' => '103',
    'type' => 'button',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'backgroundcolor' => '224,224,224',
    'nextPage' => 2,
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$user = 'root';
$password = '1ppVlcA9';
$db = 'liuxuecanada';

// Create connection
$conn = new mysqli('localhost',$user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT chinese_name FROM chinese_university";
mysqli_query($conn, "SET CHARACTER SET 'utf8';");
/*
mysqli_set_charset($Handle, 'utf8'); // <- add this too
mysqli_query($Handle, "SET NAMES 'utf8';");
mysqli_query($Handle, "SET CHARACTER SET 'utf8';");
mysqli_query($Handle, "SET COLLATION_CONNECTION = 'utf8_unicode_ci';");
*/
$result = $conn->query($sql);
$nametring = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nametring .= $row["chinese_name"] . ",";
    }
}

$nametring = substr($nametring, 0, -1);

$item3 = array('id' => 103,
    'type' => 'listview',
    'name' => 'useruniversity',
    'values' => $nametring,
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

