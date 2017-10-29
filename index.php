<?php
session_start();
function fileExist($path){
	if(file_exists($path)){
			require_once $path;
		}
		else{
			require_once 'view/home.php';
		}
}
if(isset($_REQUEST['view'])){
	$url=$_REQUEST['view'];
	$path="view/".$url.".php";
}
else{
	require_once 'view/home.php';
}
?>