<?php
$student=['rafi','sojib','muhit'];

function arrayElement($arr,$name)
{
	foreach($arr as $val)
	{
		if($val==$name){
			echo $name,"  found";
		}
	}
}

arrayElement($student,"sojib");
?>