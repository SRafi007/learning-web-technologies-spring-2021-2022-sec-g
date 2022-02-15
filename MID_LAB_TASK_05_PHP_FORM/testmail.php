<?php

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['mail'] == null){
			echo "invalid username!";
		}else{
			echo $_REQUEST['mail'];
		}
	}
?>