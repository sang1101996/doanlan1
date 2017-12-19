<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nâng cao 5_3</title>
</head>

<body>
<?php
	
	function tongsotrongchuoi($s)
	{
		$tong="0";
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i]>0) 
			{	
				$thinh=$s[$i];
				$tong=$tong+ $thinh;
			}
		}
		echo $tong;
	}
	$s="thu3ngay10thang10nam2017";
	tongsotrongchuoi($s);
 ?>
</body>
</html> 