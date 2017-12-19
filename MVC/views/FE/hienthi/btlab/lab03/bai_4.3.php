<?php
//Kết hợp hàm và vòng lặp
function kiemtranguyento($x)//Kiểm tra 1 số có nguyên tố hay không
{
	if($x<2)
		return false;
	if($x==2)
		return true;
		$i=2;
		do
		{
			if($x % $i==0) return false;
			$i++;
		}
		while($i<=sqrt($x));
		if($x%$i==0)
			return false;
	return true;
}

if(kiemtranguyento(12))
	echo  "la so nguyen to";
else
	echo "khong phai so nguyen to";
?>