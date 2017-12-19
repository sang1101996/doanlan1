<?php
function ham()
{	
$s=0;
$i=0;

	while($s <1000)
	{
		$i++;
		$s+=$i;
	}
	echo $i;
}
ham();
?>