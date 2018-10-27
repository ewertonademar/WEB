<?php
include("includes/header.php");

if(isset($logado)){
		include("classes/home.php");
}
else{
	include("classes/login1.php");
}
?>
