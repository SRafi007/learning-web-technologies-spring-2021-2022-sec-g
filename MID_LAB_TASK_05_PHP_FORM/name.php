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
	<form method="POST" action="#">

	  
	  	<fieldset>
        <legend>Name</legend>
	  		
        <input type="text" name="name" value="<?=$uname?>"><label><?=$error?></label></br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>