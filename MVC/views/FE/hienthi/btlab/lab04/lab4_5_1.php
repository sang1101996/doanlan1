<?php
$x=array("a"=>1,2,3);
function showArray($arr)
{
	echo "<table border=1> <tr><td>Index</td><td>Value</td></tr>";
	$i=0;
	foreach($arr as $k=>$v)
	{
		$i++;
		echo "<tr><td>".$k."</td>";
		echo "<td>".$v."</td></tr>";
	}
	echo "</table>";
	
}
showArray($x)
?>

