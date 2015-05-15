<?php

$database = new mysqli('localhost', 'root', '', 'projektarbete'); 


if($database->connect_errno){
	echo $database->connect_error;
}

$name = $_POST['uname'];
$password = $_POST['pword'];

echo 'uname';




$sql = $database->query("INSERT INTO members VALUES('null', '$name', '$password')");


header('Location: http://localhost/projektarbete/');


?>