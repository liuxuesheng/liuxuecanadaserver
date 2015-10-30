<?php

function returnPage5(){
$item0 = array('id' => 300,
    'type' => 'textview',
    'name' => '要申请的专业',
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
    'nextPage' => 99,
    'alignment' => '14',
    'inlayout' => 'bottom');

$item4 = array('id' => 304,
    'type' => 'textview',
    'name' => '主要类别',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$item5 = array('id' => 305,
    'type' => 'wheelselectorview',
    'name' => 'universities',
    'values' => '北京大学,清华大学,复旦大学,武汉大学,中国人民大学,浙江大学,上海交通大学,南京大学,中国科学技术大学,国防科学技术大学',
    'relation' => 3,
    'relationid' => 304,
    'alignment' => '14',
    'inlayout' => 'middle');

$item6 = array('id' => 306,
    'type' => 'textview',
    'name' => '细分类别',
    'relation' => 3,
    'relationid' => 305,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$item7 = array('id' => 307,
    'type' => 'wheelselectorview',
    'name' => 'majorcategory',
    'values' => '哲学,经济学,法学,教育学,文学,历史学,理学,工学,农学,医学,军事学,管理学',
    'relation' => 3,
    'relationid' => 306,
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3, $item4, $item5, $item6, $item7);
	echo json_encode($list);
}

?>

