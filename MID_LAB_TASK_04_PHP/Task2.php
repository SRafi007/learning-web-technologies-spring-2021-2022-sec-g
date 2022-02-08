<?php
function VAT($amount,$percentage) 
{
	$vat=($percentage*$amount)/100;
	echo "VAT= ", $vat;
}
VAT(1000,15);
?>