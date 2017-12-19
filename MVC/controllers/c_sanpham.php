<?php
include("../../models/m_sanpham.php");
class C_sanpham
{
	public function Hienthisanpham()
	{
		//Models
		$m_sanpham=new M_sanpham();
		$sanphams=$m_sanpham->Doc_sanpham();
		//Views
		include("hienthi/shop.php");
	
	} 
	
	public function Hienthichitietsanpham()
	{
		//Models
		$ma_sp=$_GET["ma_sp"];
		$m_sanpham=new M_sanpham();
		$san_pham=$m_sanpham->Doc_sanpham_theomasp($ma_sp);
		$dshinhTheoMaSP = $m_sanpham->Doc_ds_hinh_theomasp($ma_sp);
		$dsramdomSP=$m_sanpham->ramdomsp();
		//Views
		include("hienthi/v_chitietsanpham.php");

	} 
	public function sanphamcart()
		{ // echo "====="; exit;
			$id=$_GET['id'];
			if (!isset($_SESSION)) 	session_start();
			$a=array();
			$c_dsc=new M_sanpham();
			$data=$c_dsc->sanphamgiohang();
			print_r($data);
			
				foreach($data as $v)
				{
					print_r($v);
					$a[$v['masp']]=$v;
				}
				
			if(!isset($_SESSION['giohang']))
			{
				$a[$id]['soluong']=1;//neu chua co  thi xuat  sl bang 1
				$_SESSION['giohang'][$id]=$a[$id];//luu cai hanh dong nhan mua ngay (luu gio hang lai bang=mảng có id dược chọ
			}
			else
			{
				if(array_key_exists($id,$_SESSION['giohang']))//kiem tra xem $id co ton tai trong gio ko
				{
					$_SESSION['giohang'][$id]['soluong']+=1;
				}
			else
				{
					$a[$id]['soluong']=1;//neu chua co  thi xuat  sl bang 1
					$_SESSION['giohang'][$id]=$a[$id];
				}
			}	
			print_r($_SESSION['giohang']);
			//view
			include("/hienthi/giohang.php");
		}

}
?>