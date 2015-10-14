<?php

function returnRegister(){
$item0 = array('id' => 100,
    'type' => 'textview',
    'name' => '用户注册',
    'relation' => 0,
    'relationid' => 0,
    'size' => 28,
    'alignment' => '14',
    'inlayout' => 'top');

$item1 = array('id' => 101,
    'type' => 'textview',
    'name' => '完成',
    'relation' => 0,
    'relationid' => 0,
    'size' => 20,
    'nextPage' => 2,
    'savedataid' => 105,
    'savedatatype' => 'wheelselectorview',
    'alignment' => '14',
    'inlayout' => 'bottom');

$item2 = array('id' => 102,
    'type' => 'textview',
    'name' => '国家和地区',
    'relation' => 0,
    'relationid' => 0,
    'size' => 24,
    'alignment' => '5',
    'inlayout' => 'middle');

$item3 = array('id' => 103,
    'type' => 'wheelselectorview',
    'name' => 'universities',
    'values' => '中国,日本,英国,法国,澳大利亚,加拿大,美国',
    'relation' => 1,
    'relationid' => 102,
    'alignment' => '14',
    'inlayout' => 'middle');

$item4 = array('id' => 104,
    'type' => 'textview',
    'name' => '电话号码',
    'relation' => 3,
    'relationid' => 103,
    'size' => 24,
    'alignment' => '5',
    'inlayout' => 'middle');

$item5 = array('id' => 105,
    'type' => 'edittext',
    'name' => 'phonenumber',
    'relation' => '1,3',
    'relationid' => '104,103',
    'hint' => 'Enter phone number',
    'alignment' => '14',
    'inlayout' => 'middle');

$item6 = array('id' => 106,
    'type' => 'textview',
    'name' => '昵称',
    'relation' => 3,
    'relationid' => 104,
    'size' => 24,
    'alignment' => '5',
    'inlayout' => 'middle');

$item7 = array('id' => 107,
    'type' => 'edittext',
    'name' => 'aliasname',
    'relation' => '1,3',
    'relationid' => '106,104',
    'hint' => 'Enter alias name',
    'alignment' => '14',
    'inlayout' => 'middle');

$item8 = array('id' => 108,
    'type' => 'textview',
    'name' => '密码',
    'relation' => 3,
    'relationid' => 106,
    'size' => 24,
    'alignment' => '5',
    'inlayout' => 'middle');

$item9 = array('id' => 109,
    'type' => 'edittext',
    'name' => 'password',
    'relation' => '1,3',
    'relationid' => '108,106',
    'hint' => 'Enter password',
    'alignment' => '14',
    'inlayout' => 'middle');

$item10 = array('id' => 110,
    'type' => 'textview',
    'name' => '验证码',
    'relation' => 3,
    'relationid' => 109,
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$list = array($item0, $item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9, $item10);
	echo json_encode($list);
}

?>

