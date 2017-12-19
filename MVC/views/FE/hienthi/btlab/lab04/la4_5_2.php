<?php
	$arr= array();
$r = array("id"=> "sp1", "name "=> "san pham 1 ");
$arr[] = $r;
$r = array("id"=> "sp2", "name "=> "san pham 2");
$arr[] = $r;
$r = array("id"=> "sp3", "name "=> "san pham 3 ");
$arr[] = $r;
?>
<br />hien thi noi dung mang arr ra bang
<table border=1>
	<tr><td>stt</td><td>ma sp</td><td>ten sp</td></tr>
    <?php
	$i=0;
	foreach($arr as $k=>$v)
	{	$i++;
		echo "<tr><td>$i</td>";
		echo "<td>".$v["id"]."</td>";
		echo "<td>".$v["name"]."</td></tr>";
	}
	?>
</table>