<?php
session_start();
	if(isset($_SESSION["admin"])){
	//	header('location:index.php');
	}
	else
		header('location:login.php');