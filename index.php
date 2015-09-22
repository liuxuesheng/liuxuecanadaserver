<?php


$message = isset($_GET['message']) ? $_GET['message'] : '';

$sex = isset($_GET['sex']) ? $_GET['sex'] : '';
$gpa = isset($_GET['gpa']) ? $_GET['gpa'] : '';
$ielts = isset($_GET['ielts']) ? $_GET['ielts'] : '';

if ($sex == 1){
	echo "huxiling ni bu deng zhe!";
}

define('scoreLargest', 10);

$scoreLargest = 9;

echo start();


function start($sex){
	echo 'huxiling ni deng zhe!';
}

?>
