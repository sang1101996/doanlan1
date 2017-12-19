<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return $_POST[$index];
}

$sm 	= postIndex("submit");
$tendangnhap 	= postIndex("tendangnhap");
$matkhau1 = postIndex("matkhau1");
$matkhau2 = postIndex("matkhau2");
$gioitinh = postIndex("gioitinh");
$tinh = postIndex("cmbTinh");
$tinhthanh = "";
$arrtinh = array();
$arrt = array("Hồ Chí Minh", "Hà Nội", "Bình Định", "Bình Thuận"); 
foreach($arrt as $k => $v)
{
	$arrtinh[] = $v;
}
$arrImg = array("image/png", "image/jpeg", "image/bmp", "image/jpg", "image/gif");

if ($sm=="") 
{
	header("location:1.php"); exit;//quay ve 1.php
}

$err = "";
if ($tendangnhap=="") $err .= "Phải nhập tên đăng nhập<br>";
if ($matkhau1 == "" || $matkhau2 == "") $err .= "Phải nhập mật khẩu<br>";
if ($matkhau1 != $matkhau2) $err .= "Mật khẩu không chính xác<br>";
if ($gioitinh == "") $err .= "Phải chọn giới tính<br>";
if($tinh == "") $err .= "Phải chọn tỉnh";
else
{
	foreach($arrtinh as $k => $v)
	{
		if($k == $tinh)
		{
			$tinhthanh = $v;
			break;
		}
	}
}
$errFile = $_FILES["hinh"]["error"];
if ($errFile>0)
	$err .="<br>Lỗi file hình <br>";
else
{
	$type = $_FILES["hinh"]["type"];
	if (!in_array($type, $arrImg))
		$err .="Không phải file hình <br>";
	else
	{	
		$temp = $_FILES["hinh"]["tmp_name"];
		$name = $_FILES["hinh"]["name"];
		if (!move_uploaded_file($temp, "image/".$name))
			$err .="Không thể lưu file<br>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_3/2</title>
</head>
<body>
<?php
if ($err != "")
  echo $err;
else
{
	if($gioitinh =="1") 
		echo "<br>Chào Anh: $tendangnhap ";
	else 
		echo "<br>Chào Chị: $tendangnhap ";
	echo "<br>Mật khẩu: $matkhau1";
	echo "<br>Tỉnh: $tinhthanh";
	echo "<br>Hình ảnh:<br>";
	?><hr>
    <img src="image/<?php echo $name;?>">
    <?php	
}
?>
<p>
<a href="index.php">Tiếp tục</a>
</p>
</body>
</html>