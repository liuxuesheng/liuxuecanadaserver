<?php

function returnPage4(){
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
    'name' => '4/5',
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
    'nextPage' => 5,
    'savedataid' => 0,
    'savedatatype' => 'none',
    'alignment' => '14,15',
    'inlayout' => 'bottom');

$item6 = array('textid1' => 306,
    'textid2' => 308,
    'seekbarid1' => 307,
    'seekbarid2' => 309,
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
    'alignment' => '14',
    'inlayout' => 'middle');

$item7 = array('id' => 307,
    'controlid' => 309,
    'type' => 'seekbar',
    'name' => 'IELTS',
    'maxvalue' => 9,
    'minvalue' => 0,
    'factor' => 0.5,
    'relation' => 3,
    'relationid' => 306,
    'seekresultid' => 306,
    'alignment' => '14',
    'inlayout' => 'middle');

$item8 = array('id' => 308,
    'type' => 'textview',
    'name' => 'TOEFL',
    'relation' => 3,
    'relationid' => 307,
    'size' => 18,
    'alignment' => '14',
    'inlayout' => 'middle');

$item9 = array('id' => 309,
    'controlid' => 307,
    'type' => 'seekbar',
    'name' => 'TOEFL',
    'maxvalue' => 120,
    'minvalue' => 0,
    'factor' => 1,
    'relation' => 3,
    'relationid' => 308,
    'seekresultid' => 308,
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item3, $item6);
	echo json_encode($list);
}

?>

