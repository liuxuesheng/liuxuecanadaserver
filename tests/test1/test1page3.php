<?php

function returnPage3(){
$item0 = array('id' => 300,
    'type' => 'textview',
    'name' => '学术成绩',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'top');

$item1 = array('id' => 301,
    'type' => 'textview',
    'name' => '进度',
    'relation' => 1,
    'relationid' => 300,
    'size' => 18,
    'alignment' => '14',
    'inlayout' => 'top');

$item2 = array('id' => 302,
    'type' => 'progressbar',
    'relation' => 1,
    'relationid' => 300,
    'alignment' => '14',
    'inlayout' => 'top');

$item3 = array('id' => 303,
    'type' => 'textview',
    'name' => '下一步',
    'relation' => 0,
    'relationid' => 0,
    'size' => 20,
    'nextPage' => 4,
    'savedataid' => 0,
    'savedatatype' => 'none',
    'alignment' => '14',
    'inlayout' => 'bottom');

$item4 = array('id' => 304,
    'type' => 'textview',
    'name' => 'GPA',
    'relation' => 0,
    'relationid' => 0,
    'size' => 18,
    'alignment' => '14',
    'inlayout' => 'middle');

$item5 = array('id' => 305,
    'type' => 'seekbar',
    'name' => 'GPA',
    'relation' => 3,
    'relationid' => 304,
    'seekresultid' => 304,
    'alignment' => '14',
    'inlayout' => 'middle');

$item6 = array('id' => 306,
    'type' => 'textview',
    'name' => 'IELTS',
    'relation' => 3,
    'relationid' => 305,
    'size' => 18,
    'alignment' => '14',
    'inlayout' => 'middle');

$item7 = array('id' => 307,
    'type' => 'seekbar',
    'name' => 'IELTS',
    'relation' => 3,
    'relationid' => 306,
    'seekresultid' => 306,
    'alignment' => '14',
    'inlayout' => 'middle');

$item8 = array('id' => 308,
    'type' => 'textview',
    'name' => 'TOEFL',
    'relation' => 3,
    'relationid' => 307,
    'size' => 18,
    'alignment' => '14',
    'inlayout' => 'middle');

$item9 = array('id' => 309,
    'type' => 'seekbar',
    'name' => 'TOEFL',
    'relation' => 3,
    'relationid' => 308,
    'seekresultid' => 308,
    'alignment' => '14',
    'inlayout' => 'middle');


$list = array($item0, $item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9);
	echo json_encode($list);
}

?>

