<?php

$degree="";
$error="";
if(isset($_REQUEST['submit'])){
	if($_REQUEST['degree']==null){
    	$error="Invalid !";
	}
	else{$udate=$_REQUEST['degree'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">

	  
	  	<fieldset>
        <legend>DEGREE</legend>
	  	<table>
			<tr>
				<td>
					<input type="checkbox" name="degreedegreedegreedegree"><label for="ssc">SSC</label>
			  		<input type="checkbox" name="degreedegreedegree"><label for="hsc">HSC</label>
			  		<input type="checkbox" name="degreedegree"><label for="bsc">BSc</label>
			  		<input type="checkbox" name="degree"><label for="msc">MSc</label></td>
				<td>
					<?=$error?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	  </fieldset>
	</form>
</body>

</html>

