<?php
header("Content-Type:text/html;charset=utf-8");
include '../database.php';

function returnNewsList(){
$list = array();

 $sql0 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news ORDER BY id DESC LIMIT 1, 5";
getNewsHasImage($sql0,$list,'news');

$sql1 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_university ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql1,$list,'news_university');

$sql2 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_program ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql2,$list,'news_program');

$sql3 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_visa ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql3,$list,'news_visa');

$sql4 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_experience ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql4,$list,'news_experience');

$sql5 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_immigration ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql5,$list,'news_immigration');

$sql6 = "SELECT id,news_title,news_subtitle,news_date,news_imageURL FROM news_agent ORDER BY id DESC LIMIT 1";
getNewsHasImage($sql6,$list,'news_agent');

echo json_encode($list);
}

//getNewsHasImage 负责从数据库读取带有缩略图的新闻
function getNewsHasImage($mysql, &$list, $section){
    $conn = db_connect();
    mysqli_query($conn, "SET CHARACTER SET 'utf8';");
    $result = mysqli_query($conn, $mysql);  

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nametring = array('item_section' => $section, 'id' => $row["id"], 'news_title' => $row["news_title"], 'news_subtitle' => $row["news_subtitle"], 'news_date' => $row["news_date"], 'news_imageURL' => $row["news_imageURL"]);
            array_push($list, $nametring);
        }
    }
}

 echo(returnNewsList());
?>
