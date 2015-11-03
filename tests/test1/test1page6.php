<?php

function returnPage6(){
$item0 = array('id' => 300,
    'type' => 'textview',
    'name' => '专业细分类别',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 301,
    'type' => 'textview',
    'name' => '6/6',
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
    'name' => 'detailedmajorcat',
    'values' => '010107 宗教学,010106 美学,010105 伦理学,010104 逻辑学,010103 外国哲学,010102 中国哲学,010101 马克思主义哲学,02 经济学,0202 应用经济学',
    'relation' => '0',
    'relationid' => '0',
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

