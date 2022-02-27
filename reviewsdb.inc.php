<?php

	$conn = mysqli_connect('localhost', 'root', '', 'education');

	if(!$conn){
		die("Connection failed: ".myslqi_connect_error());
	}
?>