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
    'name' => '1/5',
    'relation' => '1',
    'relationid' => '100',
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 102,
    'type' => 'textview',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'nextPage' => 2,
    'savedataid' => 103,
    'savedatatype' => 'listview',
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

//echo $nametring;

$item3 = array('id' => 103,
    'type' => 'listview',
    'name' => 'universities',
    'values' => $nametring,
    //'values' => '北京大学,清华大学,复旦大学,武汉大学,中国人民大学,浙江大学,上海交通大学,南京大学,中国科学技术大学,国防科学技术大学',
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');

/*
$item4 = array('id' => 104,
    'type' => 'textview',
    'name' => '毕业院校',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$item5 = array('id' => 105,
    'type' => 'wheelselectorview',
    'name' => 'universities',
    'values' => '北京大学,清华大学,复旦大学,武汉大学,中国人民大学,浙江大学,上海交通大学,南京大学,中国科学技术大学,国防科学技术大学',
    'relation' => 3,
    'relationid' => 104,
    'alignment' => '14',
    'inlayout' => 'middle');

$item6 = array('id' => 106,
    'type' => 'textview',
    'name' => '主修专业',
    'relation' => 3,
    'relationid' => 105,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$item7 = array('id' => 107,
    'type' => 'wheelselectorview',
    'name' => 'majorcategory',
    'values' => '哲学,经济学,法学,教育学,文学,历史学,理学,工学,农学,医学,军事学,管理学',
    'relation' => 3,
    'relationid' => 106,
    'alignment' => '14',
    'inlayout' => 'middle');*/

$list = array($item0, $item1, $item2, $item3/*, $item4, $item5, $item6, $item7*/);
	echo json_encode($list);
}

?>

