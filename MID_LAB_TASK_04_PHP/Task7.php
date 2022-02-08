<?php
for($i=0;$i<3;$i++)
{
	for($j=$i;$j<3;$j++)
	{
	  echo "*";
	}
	echo "\n";
}

for($i=3;$i>0;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
	  echo $j;
	}
	echo "\n";
}

$abc=['A','B','C','D','E','F'];
foreach($abc as $val)
{
	echo $val;
	if($val=='A' ||$val=='C')
	{
		echo "\n";
	}
}
?>