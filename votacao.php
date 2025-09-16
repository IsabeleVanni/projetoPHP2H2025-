<?php 

	include ("cabecalho.php");

	$idade= 2;

	if ($idade <16){
		include ("votação_menor.php");
	}
	elseif ($idade <18){
		include("votação_16.php");
	}
	else{
		include("votação_maior.php");
	}
include("rodape.php");



 ?>	
