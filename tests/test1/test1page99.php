<?php
header("Content-Type:text/html;charset=utf-8");

function returnPage99(){
$item0 = array('id' => 9900,
    'type' => 'textview',
    'name' => '选校报告',
    'relation' => '0',
    'relationid' => '0',
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 9901,
    'type' => 'piechart',
    'name' => 'piechart1',
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');

$item2 = array('id' => 9902,
    'type' => 'radarchart',
    'name' => 'radarchart1',
    'relation' => '3',
    'relationid' => '9901',
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0,$item1,$item2);
	echo json_encode($list);
}

?>

