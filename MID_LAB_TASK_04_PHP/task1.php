<?php
function areaPeri($length,$width)
{
	echo "area= ",$length*$width;
	$perimeter= $length+$width;
	echo "\n Perimeter= ",$perimeter;
}
areaPeri(2,6);
?>