<?php
include 'test1page1.php';
include 'test1page2.php';
include 'test1page3.php';
include 'test1page4.php';
include 'test1page5.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';

findPage($page);

function findPage($page){
	if ($page == 1){
		echo returnPage1();
	}else if ($page == 2) {
		echo returnPage2();
	}else if ($page == 3) {
		echo returnPage3();
	}else if ($page == 4) {
		echo returnPage4();
	}else if ($page == 5) {
		echo returnPage5();
	}else{
		echo "BLACKBERRY UNIVERSITY";	
	}
}

?>

