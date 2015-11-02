<?php

function returnPage2(){
$item0 = array('id' => 200,
    'type' => 'textview',
    'name' => '主修专业',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 201,
    'type' => 'textview',
    'name' => '2/5',
    'relation' => 1,
    'relationid' => 200,
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 202,
    'type' => 'button',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'backgroundcolor' => '224,224,224',
    'nextPage' => 3,
    'savedataid' => 203,
    'savedatatype' => 'listview',
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$item3 = array('id' => 203,
    'type' => 'listview',
    'name' => 'majorcategory',
    'values' => '哲学,经济学,法学,教育学,文学,历史学,理学,工学,农学,医学,军事学,管理学',
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');


$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

