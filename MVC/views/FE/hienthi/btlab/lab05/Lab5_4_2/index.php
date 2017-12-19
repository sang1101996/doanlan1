<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_4_2</title>
</head>

<body>
<?php
define('ROOT', dirname(__FILE__) );//Thu muc chứa file index);
?>
<fieldset>
<legend>Nhập thông tin</legend>
<form action="SanPham.php" method="get" >
<table  align="center">
    <tr><td>Nhập tên:</td><td><input type="text" name="tensp"></td></tr>
    <tr><td>Tiêu chí:</td><td><input type="radio" name="tieuchi" value="1" checked="checked">Tìm Gần Đúng
              <input type="radio" name="tieuchi" value="0">Tìm Chính Xác</td></tr>
    <tr>
    	<td>Loại sản phẩm:</td>
    	<td>
        	<select name="cmbLoaiSanPham">
				<option value="tatca">Tất cả</option>
				<option value="loai1">Loại 1</option>
				<option value="loai2">Loại 2</option>
				<option value="loai3">Loại 3</option>
            </select>
        </td>
	</tr>
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php
        // //chuyển đổi tất cả các chữ cái trong chuỗi thành chữ hoa  
		// print(strtoupper("bai tap php co ban va nang cao."))."<br>";  
		// //chuyển đổi tất cả các chữ cái trong chuỗi thành chữ thường 
		// print(strtolower("BAI TAP PHP CO BAN VA NANG CAO."))."<br>";  
		// //chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa 
		// print(ucfirst("bai tap php co ban va nang cao."))."<br>";  
		// //chuyển đổi chữ cái đầu tiên của tất cả các từ trong chuỗi thành chữ hoa
		// print(ucwords("bai tap php co ban va nang cao."))."<br>";
		function getIndex($index, $value="")
		{
			if (!isset($_GET[$index]))	return $value;
			return $_GET[$index];
		}
		
		$s = getIndex("s");
		echo $s;
?>

</body>
</html>
