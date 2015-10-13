<?php
include 'test1page1.php';
include 'test1page2.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';

findPage($page);

function findPage($page){
	if ($page == 1){
		echo returnPage1();
	}else if ($page == 2) {
		echo returnPage2();
	}else{
		echo "BLACKBERRY UNIVERSITY";	
	}
}

?>

