<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_4_1/1</title>
</head>

<body>
<pre><?php
$arr = array(); 
$r = array("id"=>1, "name"=>"Product1"); 
$arr[] = $r; 
$r = array("id"=>2, "name"=>"Product2"); 
$arr[] = $r; 
$r = array("id"=>3, "name"=>"Product3"); 
$arr[] = $r; 
$r = array("id"=>4, "name"=>"Product4"); 
$arr[] = $r;
$_GET = $arr;
?>
<a href="2.php?id=1">Product1</a>
<a href="2.php?id=2">Product2</a>
<a href="2.php?id=3">Product3</a>
<a href="2.php?id=4">Product4</a>

</body>
</html>