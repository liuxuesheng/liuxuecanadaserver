<?php

function returnLogin(){

$item0 = array('id' => 100,
    'type' => 'edittext',
    'name' => '电话号码',
    'relation' => '0',
    'relationid' => '0',
    'hint' => '电话号码',
    'alignment' => '5',
    'inlayout' => 'middle');

$item1 = array('id' => 101,
    'type' => 'edittext',
    'name' => '密码',
    'relation' => '3',
    'relationid' => '100',
    'hint' => '密码',
    'alignment' => '5',
    'inlayout' => 'middle');

$item2 = array('id' => 102,
    'type' => 'textview',
    'name' => '登录',
    'relation' => '3',
    'relationid' => '101',
    'size' => 24,
    'alignment' => '14',
    'inlayout' => 'middle');

$item3 = array('id' => 103,
    'type' => 'textview',
    'name' => '还不是会员?请先注册',
    'relation' => '3',
    'relationid' => '102',
    'size' => 12,
    'nextPage' => "register/index.php?page=1",
    'savedataid' => '100,101',
    'savedatatype' => 'edittext,edittext',
    'alignment' => '14',
    'inlayout' => 'middle');


$list = array($item0, $item1, $item2, $item3);
	echo json_encode($list);
}

?>

