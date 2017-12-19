<?php
function showArray($arr)
{
	foreach($arr as $k=>$v)
	{
		echo "<br> $k - $v ";	
	}	
}
$a = array(6, 2, 7, 8, 5); 
$b = array("a"=>4, "b"=>2, "c"=>3, "d"=>8);
$n = array_rand($a);
echo "phan tu ngau nhien : key=$n , gia tri =".$a[$n];
$c = array_rand($a, 3);
echo "<br> danh sach 3 phan tu ngau nhien duoc chon ra :";
foreach($c as $k)
{
	echo "(key=$k -	value={$a[$k]})";
}

$m=3;
$c = array_rand($b, $m);
echo "<br> danh sach $m phan tu ngau nhien duoc lay ra tu b  :";
foreach($c as $k)
{
	echo "(key=$k -	value={$b[$k]})";
}
?><hr />
<?php
$a1= $a; sort($a1);
echo "Mang a sau khi sap xep:";
showArray($a);
$b1 = $b;
sort($b1);
echo "<br>mang b sau khi sap xep loai bo key:";
showArray($b1);

$b2 = $b;
asort($b2);
echo "<br>Mang b sau khi sap xep loai bo key:";
showArray($b2);

echo "<hr> tinh tong ";
$sum_a = array_sum($a);
$sum_b = array_sum($b);
echo "<br> tong cac gia tri trong mang a = $sum_a , mang b= $sum_b ";

$a2= $a; arsort($a2);
echo "Mang a sau khi sap xep theo thu tu giam dan theo value:";
showArray($a2);


 //sort()  Dùng để sắp xếp mảng theo thứ tự bảng chữ cái alphabet 
 //rsort() Ngược lại với hàm sort() thì hàm rsort() sẽ sắp xếp lại các phần từ trong mảng theo thứ từ từ cao đến thấp
 //asort() Đây là hàm dùng để sắp xếp mảng trong php theo giá trị (value) của mảng
 //ksort() Đây là hàm dùng để sắp xếp mảng trong php theo khóa (key) của mảng
 //arsort() Đây là hàm dùng để sắp xếp mảng trong php theo giá trị (value), thứ tự giảm dần
 //krsort() Đây là hàm dùng để sắp xếp mảng trong php theo khóa (key), thứ tự giảm dần


?>


