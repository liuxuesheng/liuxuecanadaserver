<?php

function returnPage4(){
$item0 = array('id' => 400,
    'type' => 'textview',
    'name' => '学术成绩',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item1 = array('id' => 401,
    'type' => 'textview',
    'name' => '4/6',
    'relation' => 1,
    'relationid' => 400,
    'size' => 16,
    'textcolor' => '#FFFFFF',
    'alignment' => '14,15',
    'inlayout' => 'top');

$item2 = array('id' => 402,
    'blockbyid' => '407A,409A',
    'type' => 'button',
    'name' => '下一步',
    'relation' => '0',
    'relationid' => '0',
    'size' => 16,
    'backgroundcolor' => '224,224,224',
    'nextPage' => 5,
    'savedataid' => 0,
    'savedatatype' => 'none',
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$item3 = array('textid1' => 403,
    'textid2' => 408,
    'seekbarid1' => 407,
    'seekbarid2' => 409,
    'type' => '2seekbar',
    'textname1' => 'IELTS',
    'textname2' => 'TOEFL',
    'size' => 18,
    'maxvalue1' => 9,
    'minvalue1' => 0,
    'factor1' => 0.5,
    'maxvalue2' => 120,
    'minvalue2' => 0,
    'factor2' => 1,
    'relation' => 0,
    'relationid' => 0,
    'alignment' => '14,15',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

