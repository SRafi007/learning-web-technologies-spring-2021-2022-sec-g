<?php

$udate="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['date']==null){
    	$error="Invalid !";
	}
	else{$udate=$_REQUEST['date'];}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="dob.php">

	  
	  	<fieldset>
        <legend>Email</legend>
	  		
        <input type="date" name="date" value="<?=$udate?>">>
	  			</br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>