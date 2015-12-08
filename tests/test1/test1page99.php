<?php
header("Content-Type:text/html;charset=utf-8");

function returnPage99(){
// $item0 = array('id' => 9900,
//     'type' => 'textview',
//     'name' => '选校报告',
//     'relation' => '0',
//     'relationid' => '0',
//     'size' => 24,
//     'textcolor' => '#FFFFFF',
//     'alignment' => '14,15',
//     'inlayout' => 'top');

// $item1 = array('id' => 9901,
//     'type' => 'piechart',
//     'name' => 'piechart1',
//     'relation' => '0',
//     'relationid' => '0',
//     'alignment' => '14',
//     'inlayout' => 'middle');

// $item2 = array('id' => 9902,
//     'type' => 'radarchart',
//     'name' => 'radarchart1',
//     'relation' => '3',
//     'relationid' => '9901',
//     'alignment' => '14',
//     'inlayout' => 'scroll');

// $list = array($item0,$item1);
// 	echo json_encode($list);

    // set metadata for testing
    $userSelection1 = array(
        '103'=>'四川大学',
        '203' => '计算机与信息技术',
        '307'=>3.0,
        '407'=>6.0,
        '503'=> '法学',
        '603'=>'计算机与信息技术');
            
    $chinese_university = $userSelection1['103'];
    $chinese_program = $userSelection1['203'];
    $gpa = $userSelection1['307'];
    $english_score = $userSelection1['407'];
    $select_program = $userSelection1['503'];
    $select_major = $userSelection1['603'];

    if($english_score<6.0){
        echo "You cannot select any university.";
    }
    elseif($english_score == 6.0){
        
        // Check connection
        $sql = "SELECT chinese_name FROM university WHERE id = 101002";
        linkMySQL($sql);
    }
    else{
        $sql = "SELECT chinese_name FROM university";
        linkMySQL($sql);
    }
}
//this method is to link mysql
function linkMySQL($mysql){
    $user = 'root';
    $password = '1ppVlcA9';
    $db = 'liuxuecanada';
    // Create connection
    $conn = new mysqli('localhost',$user, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = $mysql;
    mysqli_query($conn, "SET CHARACTER SET 'utf8';");

    $result = $conn->query($sql);
    $nametring = "";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nametring .= $row["chinese_name"] . ",";
        }
    }

    $nametring = substr($nametring, 0, -1);
    echo $nametring;
}

?>

