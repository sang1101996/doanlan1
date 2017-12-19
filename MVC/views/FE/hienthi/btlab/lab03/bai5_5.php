<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nâng cao 5_5</title>
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
				$d=0;
				for($j=$i+1;$j<strlen($s);$j++)
				{
					if($s[$j]>0 || $s[$j]=="0")
					{
						$d++;
						$thinh=$thinh.$s[$j];
					}
					else break;
				}
				$tong=$tong+ $thinh;
				$i=$i+$d;
			}
		}
		echo $tong;
	}
	$s="thu3ngay10thang10nam2018";
	tongsotrongchuoi($s);

 ?>
</body>
</html> 