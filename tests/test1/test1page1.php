<?php

function returnPage1(){
$item0 = array('id' => 100,
    'type' => 'textview',
    'name' => '学术背景',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'inlayout' => 'top');

$item1 = array('id' => 101,
    'type' => 'textview',
    'name' => '进度',
    'relation' => 1,
    'relationid' => 100,
    'size' => 18,
    'inlayout' => 'top');

$item2 = array('id' => 102,
    'type' => 'progressbar',
    'relation' => 1,
    'relationid' => 100,
    'inlayout' => 'top');

$item3 = array('id' => 103,
    'type' => 'textview',
    'name' => '下一步',
    'relation' => 0,
    'relationid' => 0,
    'size' => 18,
    'nextPage' => 2,
    'inlayout' => 'bottom');

$item4 = array('id' => 104,
    'type' => 'textview',
    'name' => '毕业院校',
    'relation' => 0,
    'relationid' => 0,
    'size' => 18,
    'inlayout' => 'middle');

$item5 = array('id' => 105,
    'type' => 'wheelselectorview',
    'name' => 'universities',
    'values' => '北京大学,清华大学,复旦大学,武汉大学,中国人民大学,浙江大学,上海交通大学,南京大学,中国科学技术大学,国防科学技术大学',
    'relation' => 3,
    'relationid' => 104,
    'inlayout' => 'middle');

$item6 = array('id' => 106,
    'type' => 'textview',
    'name' => '主修专业',
    'relation' => 3,
    'relationid' => 105,
    'size' => 18,
    'inlayout' => 'middle');

$item7 = array('id' => 107,
    'type' => 'wheelselectorview',
    'name' => 'majorcategory',
    'values' => '哲学,经济学,法学,教育学,文学,历史学,理学,工学,农学,医学,军事学,管理学',
    'relation' => 3,
    'relationid' => 106,
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3, $item4, $item5, $item6, $item7);
	echo json_encode($list);
}

?>

