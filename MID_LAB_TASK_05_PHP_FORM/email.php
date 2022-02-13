<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['mail']==null){
    	$error="Invalid Name!";
	}
	else{$email=$_REQUEST['mail'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="name.php">

	  
	  	<fieldset>
        <legend>Email</legend>
	  		
        <input type="text" name="mail" value="<?=$email?>"><td><?=$error?></td></br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>