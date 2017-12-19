<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nâng cao 5_1</title>
</head>

<body>
<?php
	function kt_nguyento($n)
	{
		if($n==1 || $n==2) return true;
		if($n > 2)
		{
			for($i=2;$i<=$n/2;$i++)
				if($n % $i ==0) return false;
			return true;
		}
	}
	function in_n_songuyento($n)
	{
		$dem=0;
		$i=1;
		while($dem<=$n)
		{
			if(kt_nguyento($i))
				{
					echo "$i -";
					$dem++;
				}
			$i++;
		}
	}
 ?>
 <?php 
	in_n_songuyento(20);
 ?>
</body>
</html> 