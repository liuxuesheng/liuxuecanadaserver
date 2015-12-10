<?php
header("Content-Type:text/html;charset=utf-8");

function returnNewsList(){
$list = array();

//主板
 $sql88 = "SELECT id,news_title,news_imageURL FROM news ORDER BY id DESC LIMIT 1, 5";
getNewsHasImage($sql88,$list,'news');

//学校介绍
array_push($list, array('section' => '学校介绍'));
$sql1 = "SELECT id,news_title,news_imageURL FROM news_university ORDER BY id DESC LIMIT 1";
$sql2 = "SELECT id,news_title FROM news_university ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql1,$list,'news_university');
getNewsNoImage($sql2,$list,'news_university');

//专业选择
array_push($list, array('section' => '专业选择'));
$sql3 = "SELECT id,news_title,news_imageURL FROM news_program ORDER BY id DESC LIMIT 1";
$sql4 = "SELECT id,news_title FROM news_program ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql3,$list,'news_program');
getNewsNoImage($sql4,$list,'news_program');

//签证信息
array_push($list, array('section' => '签证信息'));
$sql5 = "SELECT id,news_title,news_imageURL FROM news_visa ORDER BY id DESC LIMIT 1";
$sql6 = "SELECT id,news_title FROM news_visa ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql5,$list,'news_visa');
getNewsNoImage($sql6,$list,'news_visa');


//学业心得
array_push($list, array('section' => '学业心得'));
$sql5 = "SELECT id,news_title,news_imageURL FROM news_experience ORDER BY id DESC LIMIT 1";
$sql6 = "SELECT id,news_title FROM news_experience ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql5,$list,'news_experience');
getNewsNoImage($sql6,$list,'news_experience');

//移民入籍新闻
array_push($list, array('section' => '移民入籍新闻'));
$sql5 = "SELECT id,news_title,news_imageURL FROM news_immigration ORDER BY id DESC LIMIT 1";
$sql6 = "SELECT id,news_title FROM news_immigration ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql5,$list,'news_immigration');
getNewsNoImage($sql6,$list,'news_immigration');

//中介服务信息
array_push($list, array('section' => '中介服务信息'));
$sql5 = "SELECT id,news_title,news_imageURL FROM news_agent ORDER BY id DESC LIMIT 1";
$sql6 = "SELECT id,news_title FROM news_agent ORDER BY id DESC LIMIT 1, 4";
getNewsHasImage($sql5,$list,'news_agent');
getNewsNoImage($sql6,$list,'news_agent');

	echo json_encode($list);
}


//getNewsHasImage 负责从数据库读取带有缩略图的新闻
function getNewsHasImage($mysql, &$list, $section){
    $user = 'root';
    $password = '1ppVlcA9';
    $db = 'liuxuecanada';
    
    // Create connection
    $conn = new mysqli('localhost',$user, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = $mysql;
    mysqli_query($conn, "SET CHARACTER SET 'utf8';");

    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nametring = array('item_section' => $section, 'id' => $row["id"], 'news_title' => $row["news_title"], 'news_imageURL' => $row["news_imageURL"]);
            array_push($list, $nametring);
        }
    }
}

//getNewsNoImage 负责从数据库读取带有没有缩略图的新闻
function getNewsNoImage($mysql, &$list, $section){
    $user = 'root';
    $password = '1ppVlcA9';
    $db = 'liuxuecanada';

    // Create connection
    $conn = new mysqli('localhost',$user, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = $mysql;
    mysqli_query($conn, "SET CHARACTER SET 'utf8';");

    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $record = array('item_section' => $section, 'id' => $row["id"], 'news_title' => $row["news_title"]);
            array_push($list, $record);
        }
    }

}
 echo(returnNewsList());
?>
