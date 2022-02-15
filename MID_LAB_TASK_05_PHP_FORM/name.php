<?php 

$uerror = "";
$username = "";

if(isset($_REQUEST['submit'])){
		
	if($_REQUEST['username'] == null){
		$uerror =  "invalid username!";
	}else{
		$username = $_REQUEST['username'];
	}
}

?>

<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
        <legend>NAME</legend>
	  		
		<table>
			<tr>
				<td></td>
				<td>
					<input type="text" name="username" value="<?=$username?>">
				</td>
				<td>
					<?=$uerror?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>