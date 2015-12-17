<?php
header("Content-Type:text/html;charset=utf-8");
include '../database.php';
//$recordPage = isset($_GET['page']) ? $_GET['page'] : '';
//$section = isset($_GET['section']) ? $_GET['section'] : '';

function returnTestPage(){
    //title
    $sql = "SELECT name, imageURL FROM test_all ORDER BY id DESC LIMIT 6";
    
    $conn = db_connect();
    mysqli_query($conn, "SET CHARACTER SET 'utf8';");
    $result = mysqli_query($conn, $sql); 

    $list = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $record = array('name' => $row["name"], 'imageURL' => $row["imageURL"]);
            array_push($list, $record);
        }
    }

    echo json_encode($list);
}

echo(returnTestPage())
?>

