<?php

	switch ($x){
	case $x	== "A" || $x == "A\B" || $x == "B" || $x == "B-" || $x == "B/C"):
		echo "LULUS"
		break;
	case($x == "C+" || $x == "C" || $x == "C-" || $x == "C/D" ):
		echo "LULUS SEBAIKNYA DIULANG";
		break;
	case($x=="D+" || $x=="D"):
		echo "LULUS & WAJIB DIULANG";
		break;
	default:
		echo "TIDAK LULUS";
		break;
	}

?>