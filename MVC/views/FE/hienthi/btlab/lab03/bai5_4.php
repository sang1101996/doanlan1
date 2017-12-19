<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nâng cao 5_4</title>
</head>

<body>
<?php
	
	function hcn_rong($d,$r)
	{
		$s="";
		for($i=1;$i<=$r;$i++)
		{
			if($i==1 ||$i==$r)
				for($j=1;$j<=$d;$j++)
				{
					$s="$s *";
				}
			else 
				for($j=1;$j<=$d;$j++)
				{
					if($j==1 ||$j==$d)
						$s="$s *";
					else $s="$s &nbsp&nbsp";
				}
			$s="$s <br/>";
		}
		echo $s;
	}
	
	hcn_rong(10,5);
 ?>
</body>
</html> 