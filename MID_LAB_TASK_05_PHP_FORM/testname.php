<?php

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['username'] == null){
			echo "invalid username!";
		}else{
			echo $_REQUEST['submit'];
		}
	}
?>