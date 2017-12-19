<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
	//$path ="index.php";//mac dinh
	//$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["mod"])?$_GET["mod"]:"";
	if($ac != "")
		include ROOT."/module/product/index.php";
?>