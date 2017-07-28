<?php
$x = "B-";
	if ($x == "A" || $x == "A\B" || $x == "B" || $x == "B-" || $x == "B/C"){
		echo "LULUS";
	}elseif($x == "C+" || $x == "C" || $x == "C-" || $x == "C/D" ){
		echo "LULUS SEBAIKNYA DIULANG";
	}elseif($x=="D+" || $x=="D"){
		echo "LULUS & WAJIB DIULANG";
	}else{
		echo "TIDAK LULUS";
	}


?>