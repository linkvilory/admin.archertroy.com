<?php

session_start();

$name = $_POST["name"];
$pass = $_POST["pass"];

if(isset($name) && isset($pass)){
	if($name == "admin" && $pass == "@rcherP@ss"){ echo 1; $_SESSION["login"] = "set"; }
}else{
	echo 0;
}

?>