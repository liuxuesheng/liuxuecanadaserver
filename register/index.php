<?php
include 'register.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';

findPage($page);

function findPage($page){
	if ($page == 1){
		echo returnRegister();
	}else{
		echo "BLACKBERRY UNIVERSITY";	
	}
}

?>

