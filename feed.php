<?php

	require_once 'database_connection/database_connection.php';

	if ($user_username = $_COOKIE["u"]){

 		$user_username = $_COOKIE["u"];  

	}else{

    	header("Location:index.php");
	}


	if(isset($_POST["new_message"])){

		$typed_message = mysqli_escape_string($my_connection_string,$_POST["new_message"]);

		$given_id = rand(0,3);

		$my_insert_query = "INSERT INTO `tbl_my_forum` (`id`, `username`, `given_id`, `message`, `timestamp`) VALUES (NULL, '$user_username', '$given_id', '$typed_message', CURRENT_TIMESTAMP)";

		$execute_my_insert_query = mysqli_query($my_connection_string,$my_insert_query);

	}




?>