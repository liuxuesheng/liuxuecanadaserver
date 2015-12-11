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
    'name' => '3/6',
    'relation' => 1,
    'relationid' => 300,
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 302,
    'blockbyid' => '307',
    'type' => 'button',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'backgroundcolor' => '224,224,224',
    'nextPage' => 4,
    'savedataid' => 0,
    'savedatatype' => 'none',
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$item3 = array('id' => 303,
    'textid' => 306,
    'seekbarid' => 307,
    'type' => 'seekbar',
    'textname' => 'GPA',
    'relation' => 0,
    'relationid' => 0,
    'maxvalue' => 4,
    'minvalue' => 0,
    'factor' => 0.1,
    'alignment' => '14,15',
    'inlayout' => 'middle');


$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

