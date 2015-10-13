<?php

function returnPage2(){
$item0 = array('id' => 200,
    'type' => 'textview',
    'name' => '学术成绩',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'inlayout' => 'top');

$item1 = array('id' => 201,
    'type' => 'textview',
    'name' => '进度',
    'relation' => 1,
    'relationid' => 200,
    'size' => 18,
    'inlayout' => 'top');

$item2 = array('id' => 202,
    'type' => 'progressbar',
    'relation' => 1,
    'relationid' => 200,
    'inlayout' => 'top');

$item3 = array('id' => 203,
    'type' => 'textview',
    'name' => '下一步',
    'relation' => 0,
    'relationid' => 0,
    'size' => 18,
    'inlayout' => 'bottom');

$item4 = array('id' => 204,
    'type' => 'textview',
    'name' => 'GPA',
    'relation' => 0,
    'relationid' => 0,
    'size' => 18,
    'inlayout' => 'middle');

$item5 = array('id' => 205,
    'type' => 'seekbar',
    'name' => 'GPA',
    'relation' => 3,
    'relationid' => 204,
    'seekresultid' => 204,
    'inlayout' => 'middle');

$item6 = array('id' => 206,
    'type' => 'textview',
    'name' => 'IELTS',
    'relation' => 3,
    'relationid' => 205,
    'size' => 18,
    'inlayout' => 'middle');

$item7 = array('id' => 207,
    'type' => 'seekbar',
    'name' => 'IELTS',
    'relation' => 3,
    'relationid' => 206,
    'seekresultid' => 206,
    'inlayout' => 'middle');

$item8 = array('id' => 208,
    'type' => 'textview',
    'name' => 'TOEFL',
    'relation' => 3,
    'relationid' => 207,
    'size' => 18,
    'inlayout' => 'middle');

$item9 = array('id' => 209,
    'type' => 'seekbar',
    'name' => 'TOEFL',
    'relation' => 3,
    'relationid' => 208,
    'seekresultid' => 208,
    'inlayout' => 'middle');


$list = array($item0, $item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9);
	echo json_encode($list);
}

?>

