<?php
header("Content-Type:text/html;charset=utf-8");

function returnPage99(){
$item0 = array('id' => 9900,
    'type' => 'piechart',
    'name' => '毕业院校',
    'relation' => '0',
    'relationid' => '0',
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'middle');

$item1 = array('id' => 9901,
    'type' => 'radarchart',
    'name' => '毕业院校',
    'relation' => '0',
    'relationid' => '0',
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'middle');
$list = array($item0,$item1);
	echo json_encode($list);
}

?>

