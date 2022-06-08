<?php
$host = "localhost";
$user = "root";
$pass = "lu09ki01";
$db   = "biblioteca";
$con  = mysqli_connect($host,$user,$pass,$db);

if (!$con)
	echo "Não foi possivel se conectar a base de dados Por Favor entre em contato com o Programador ";


?>