<?php 
function biggestnum($a,$b,$c)
{
	$big=$a;
	if($big<$b){
		$big=$b;
	}
	if($big<$c){
		$big=$c;
	}
	echo "Biggest number is=",$big;
}

biggestnum(10,70,66);
?>