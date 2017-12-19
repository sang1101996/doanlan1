<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nâng cao 5_2</title>
</head>

<body>
<?php
	function kt_doixung($s){
		for($i=0;$i< strlen($s)/2;$i++)
		{
			if($s[$i] != $s[strlen($s)-$i-1]) return false;
		}
		return true;
	}
	$s="asddsa";
	if(kt_doixung($s))
		echo "chuỗi '$s' đối xứng";
	else echo " chuỗi '$s' không đối xứng";
 ?>
</body>
</html> 