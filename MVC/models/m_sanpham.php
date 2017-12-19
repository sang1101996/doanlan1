<?php
require_once("database.php");
class M_sanpham extends database
{
	//nguoi dung
	public function Doc_sanpham()
	{
		$sql="select * from sanpham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_sanpham_theomasp($masp)
	{
		$sql="select * from sanpham where masp=?";
		$this->setQuery($sql);
		$param=array($masp);
		
		return $this->loadRow($param);
	}
	
	public function Doc_ds_hinh_theomasp($masp)
	{
		$sql="select * from dshinhchitietsanpham where masp=?";
		$this->setQuery($sql);
		$param=array($masp);
		
		return $this->loadAllRows($param);
	}
	
	public function search($tensp)
	{ 
		$arr=array("%".$tensp."%");
		$sql="select * from sanpham where tensp like ? ";
		$this->_sql= $sql;
		//echo $sql; print_r($arr);
		return $this->execute2($arr);
	}
	public function ramdomsp()
	{		      

		$sql = "SELECT  * FROM sanpham  order by rand() limit 0, 3";
		$this->setQuery($sql);
		return $this->loadAllRows();

	}
	public function sanphamgiohang()
	{	
		$sql="select * from sanpham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//quan tri
	
}

?>