<?php
header('Content-Type: text/html; charset=utf-8');
$banco = "db_mappointsenha";
$usuario = "root";
$senha = "";
$hostname = "localhost";
$conn = mysql_connect($hostname,$usuario,$senha); 
mysql_select_db($banco,$conn) or die( "Não foi possível conectar ao banco MySQL");
?>