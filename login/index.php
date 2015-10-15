<?php
include 'login.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';

findPage($page);

function findPage($page){
	if ($page == 1){
		echo returnLogin();
	}else{
		echo "BLACKBERRY UNIVERSITY";	
	}
}

?>

