<?php 
	require('header.php');
	$id= $_GET['id'];

	$file = fopen('../models/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode("|", $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}

	$strings = file_get_contents('../models/user.txt'); 
		$updateString="";
        $oldString=$id."|".$editUser[1]."|".$editUser[2]."|".$editUser[3];

		$newStrings=str_replace($oldString, $updateString, $strings);
		$file = fopen('../models/user.txt', 'w');
		fwrite($file, $newStrings);

?>