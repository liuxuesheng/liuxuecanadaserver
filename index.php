<?php


$message = isset($_GET['message']) ? $_GET['message'] : '';

$sex = isset($_GET['sex']) ? $_GET['sex'] : '';
$gpa = isset($_GET['gpa']) ? $_GET['gpa'] : '';
$ielts = isset($_GET['ielts']) ? $_GET['ielts'] : '';

define('scoreLargest', 10);

$scoreLargest = 9;

/*
start($sex);


function start($sex){
	if ($sex == 1){
	echo "YORK UNIVERSITY";
	}else{
	echo "BLACKBERRY UNIVERSITY";	
	}
}*/

$post_data = array('id' => 730,
    'type' => 'textview',
    'name' => 'Server Title',
    'relation' => 0,
    'relationid' => 0,);
/*
echo json_encode(array('item0' => $post_data),JSON_FORCE_OBJECT);*/
echo json_encode($post_data);

?>
