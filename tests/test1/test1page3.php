<?php

function returnPage3(){
$item0 = array('id' => 300,
    'type' => 'textview',
    'name' => '学术成绩',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 301,
    'type' => 'textview',
    'name' => '3/5',
    'relation' => 1,
    'relationid' => 300,
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item3 = array('id' => 303,
    'type' => 'textview',
    'name' => '下一步',
    'relation' => 0,
    'relationid' => 0,
    'size' => 16,
    'nextPage' => 4,
    'savedataid' => 0,
    'savedatatype' => 'none',
    'alignment' => '14,15',
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
    'maxvalue' => 4,
    'minvalue' => 0,
    'factor' => 0.1,
    'alignment' => '14',
    'inlayout' => 'middle');


$list = array($item0, $item1, $item3, $item4, $item5);
	echo json_encode($list);
}

?>

