<?php

$uname="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['name']==null){
    	$error="Invalid Name!";
	}
	else{$uname=$_REQUEST['name'];}
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
        <legend>Name</legend>
	  		
        <input type="text" name="name" value="<?=$uname?>"><td><?=$error?></td></br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>