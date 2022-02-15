<?php

$mail="";
$error="";
if(isset($_REQUEST['submit'])){
	if($_REQUEST['mail']==null){
    	$error="Invalid email!";
	}
	else{$mail=$_REQUEST['mail'];}
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
        <legend>EMAIL</legend>
	  	<table>
			<tr>
				<td></td>
				<td>
					<input type="text" name="mail" value="<?=$mail?>"></br>

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

