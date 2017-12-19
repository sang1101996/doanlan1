<?php
$a = array(1, -3, 5); //mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>-6);//mảng có 3 phần tử.Các index của mảng là chuỗi


//cau A
$i=0;
foreach($a as $value)
{
	if($value>0)
		$i++;
}
echo "so duong trong mang la : ".$i."<br></br>";

//cau B
$c=array();
foreach($b as $k=>$v)
{
	if($v>0)
	$c[$k]=$v;
}
foreach($c as $k=>$v)
{
	echo "<br>($k - $v)</br>";
}


?>
