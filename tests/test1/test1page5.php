<?php

function returnPage5(){
$item0 = array('id' => 300,
    'type' => 'textview',
    'name' => '要申请的专业大类',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 301,
    'type' => 'textview',
    'name' => '5/6',
    'relation' => '1',
    'relationid' => '300',
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 302,
    'type' => 'button',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'backgroundcolor' => '224,224,224',
    'nextPage' => 6,
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$item3 = array('id' => 103,
    'type' => 'listview',
    'name' => 'mainmajorcat',
    'values' => '哲学,经济学,法学,教育学,文学,历史学,理学,工学,农学,医学,军事学,管理学',
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

