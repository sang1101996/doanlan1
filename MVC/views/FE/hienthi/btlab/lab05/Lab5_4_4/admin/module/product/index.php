<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
if ($ac=="sach") 
	$path = ROOT."/module/product/DanhMucSach.php";
if ($ac=="loai") 
	$path =ROOT."/module/product/LoaiSach.php";
if ($ac=="nhaxb")
	 {
	$path =ROOT."/module/product/NhaXuatBan.php";
	 }
if ($ac=="order")
	 {
	$path =ROOT."/module/product/QuanLyDonHang.php";
	 }
if ($ac=="user")
	 {
	$path =ROOT."/module/product/ThongTinUser.php";
	 }
include $path;
?>