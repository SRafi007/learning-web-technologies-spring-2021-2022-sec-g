<?php

$dateofBirth="";
$error="";
if(isset($_REQUEST['submit'])){
	if($_REQUEST['dateofBirth']==null){
    	$error="Invalid !";
	}
	else{$udate=$_REQUEST['dateofBirth'];}
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
        <legend>Date Of Birth</legend>
	  	<table>
			<tr>
				<td></td>
				<td>
					 <input type="date" name="dateofBirth" value="<?=$dateofBirth?>">

				</td>
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

