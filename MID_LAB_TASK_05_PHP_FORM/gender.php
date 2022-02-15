<?php

$gender="";
$error="";
if(isset($_REQUEST['submit'])){
	if($_REQUEST['gender']==null){
    	$error="Invalid !";
	}
	else{$udate=$_REQUEST['gender'];}
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
        <legend>Gender</legend>
	  	<table>
			<tr>
				
				<td>
					<input type="radio" name="gender" value="<?=$gender?>">
	  			<label for="male">Male</label>
	  			<input type="radio" name="gender" value="<?=$gender?>">
	  			<label for="female">Female</label>
	  			<input type="radio" name="gender" value="<?=$gender?>">
	  			<label for="other">Other</label>
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

