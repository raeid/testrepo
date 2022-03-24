<?php
echo "\t\t\tMultiplication table\n";
for($i=1;$i<=10;$i++)
	for($j=1;$j<=10;$j++){
		echo $i*$j;
		echo "\t";
		
		if($j==10){
			echo "\n";
		}
	}
?>