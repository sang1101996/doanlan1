<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_4_3</title>
</head>

<body>
<?php
define('ROOT', dirname(__FILE__) );//Thu muc chứa file index);
?>
<fieldset>
<legend>Đăng ký thông tin thành viên</legend>
<form action="2.php" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên đăng nhập:</td><td><input type="text" name="tendangnhap"></td></tr>
	<tr><td>Mật khẩu:</td><td><input type="password" name="matkhau1"></td></tr>
	<tr><td>Nhập mật khẩu:</td><td><input type="password" name="matkhau2"></td></tr>
    <tr><td>Giới tính:</td><td><input type="radio" name="gioitinh" value="1" checked="checked">Nam
							  <input type="radio" name="gioitinh" value="0">Nữ</td></tr>
	<tr><td>Hình ảnh</td> <td><input type="file" name="hinh"></td></tr>
    <tr>
    	<td>Tỉnh:</td>
    	<td>
        	<select name="cmbTinh">
				<option selected></option>
				<option value="0">Hồ Chí Minh</option>
				<option value="1">Hà Nội</option>
				<option value="2">Bình Định</option>
				<option value="3">Bình Thuận</option>
            </select>
        </td>
	</tr>
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php

?>
</body>
</html>
