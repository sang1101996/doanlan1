<pre><?php
	$a=array("Câu 1: thich cai gi ?","Câu 2:  yeu cai gi?","Câu 3:  muon cai gi?","Câu 4: 	 tinh lam gi?");
	$b=array_rand($a,3);
	foreach ($b as $key) {
		echo "$a[$key]"."<br>";
		echo "	choi    hoc"."<br>";
	}
?>