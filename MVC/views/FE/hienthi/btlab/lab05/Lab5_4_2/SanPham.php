<?php
function getIndex($index, $value="")
{
	if (!isset($_GET[$index]))	return $value;
	return $_GET[$index];
}

$tensp = getIndex("tensp");
$tieuchi = getIndex("tieuchi");
$cmbLoaiSanPham = getIndex("cmbLoaiSanPham");

$arr = array();
$loai1 = array("Chocolate Loai1","Chuoi Loai1","Mực Loai1","Cafe Loai1","Ga Loai1");
$loai2 = array("Chocolate Loai2","Chuoi Loai2","Mực Loai2","Cafe Loai2","Ga Loai2");
$loai3 = array("Chocolate Loai3","Chuoi Loai2","Mực Loai3","Cafe Loai3","Ga Loai3");
$arr["loai1"] = $loai1;
$arr["loai2"] = $loai2;
$arr["loai3"] = $loai3;

function chuanhoachuoi($string)
{
	$string = trim($string);
	$string = strtolower($string);
	$length = strlen($string);
	$j = 0;
	$string2 = "";
	$dem = 0;
	for($i = 0; $i < $length; $i++)
	{
		if(substr($string,$i,1) == ' ')
		{
			if($dem == 0)
			{
				$string2 .= substr($string,0,$i);
			}
			else
			{
				$start = $j +1;
				$end = $i - $start;
				$string2 .= substr($string,$start,$end);
			}
			$dem++;
			$j = $i;
		}
		if($i == $length-1)
		{
			$start = $j +1;
			$end = $length - $start;
			$string2 .= substr($string,$start,$end);
		}
	}
	return $string2;
}

function timSP($arr, $ten)
{
	$s ="";
	foreach($arr as $k => $v)
	{
		$s = chuanhoachuoi($v);
		
		if($ten == $s)
		{
			return $v;
		}
	}
}

function timAll($arr, $ten)
{
	$s = "";
	$ss = "";
	foreach($arr as $k => $v)
	{
		foreach($v as $kk => $vv)
		{
			$ss = chuanhoachuoi($vv);
			if(similar_text($ten,$ss) > 3)
				$s .= $vv."<br>";
		}
	}
	return $s;
}
$path = "";
if($tieuchi == 0) // tìm chính xác.
{	
	if($cmbLoaiSanPham == "tatca")
	{
		$sp = timAll($arr,chuanhoachuoi($tensp));
		$path = "Sản phẩm bạn tìm là: <br>".$sp;
	}
	if($cmbLoaiSanPham == "loai1")
	{
		$sp = timSP($arr["loai1"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			$s = "Sản phẩm bạn tìm không đúng!";
			$path = $s;
		}
		else
		{
			$s = "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	
	if($cmbLoaiSanPham == "loai2")
	{
		$sp = timSP($arr["loai2"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			$s = 'Sản phẩm bạn tìm không đúng!';
			$path = $s;
		}
		else
		{
			$s = "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	
	if($cmbLoaiSanPham == "loai3")
	{
		$sp = timSP($arr["loai3"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			echo "Sản phẩm bạn tìm không đúng!";
			return;
		}
		else
		{
			echo "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	echo $path;
}
else
{
	if($cmbLoaiSanPham == "tatca")
	{
		$sp = timAll($arr,chuanhoachuoi($tensp));
		$path = "Sản phẩm bạn tìm là: <br>".$sp;
	}
	
	if($cmbLoaiSanPham == "loai1")
	{
		$sp = timAll($arr["loai1"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			$s =  "Sản phẩm bạn tìm không đúng!";
			$path = $s;
		}
		else
		{
			$s = "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	
	if($cmbLoaiSanPham == "loai2")
	{
		$sp = timAll($arr["loai2"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			$s = "Sản phẩm bạn tìm không đúng!";
			$path = $s;
		}
		else
		{
			$s = "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	
	if($cmbLoaiSanPham == "loai3")
	{
		$sp = timAll($arr["loai3"],chuanhoachuoi($tensp));
		if($sp == "")
		{
			$s = "Sản phẩm bạn tìm không đúng!";
			$path = $s;
		}
		else
		{
			$s = "Sản phẩm bạn tìm là: <br>".$sp;
			$path = $s;
		}
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_4_2/sanpham</title>
</head>
<body>
<?php
	echo $path."<br>";
?>
<p>
<a href="index.php">Tiếp tục</a>
</p>
</body>
</html>