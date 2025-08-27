<?php 

	function titulo(){
		echo ("Calculadora! <br/>");
	}

	echo("Escolha uma das operações abaixo: <br/>");
	echo("1-Soma<br/>");
	echo("2-Subtração<br/>");
	echo("3-Divisão<br/>");
	echo("4-Multiplicação<br/>");
	echo("5-Sair<br/>");

	$num1="Soma";
	$num2="Subtração";
	$num3="Divisão";
	$num4="Multiplicação";
	$num5="Sair";
	echo("A operação escolhida foi $num2 <br/>");

	echo("Escolha dois números: <br/>");
	$a1= 10;
	$a2= 10;
	echo ("Os Números escolhidos foram: $a1 e $a2 <br/>");

	if ($num2) {
		$resp = $a1 - $a2;

		echo ("O resultado da $num2 dos números escolhidos é igual a $resp");
	}

	else if($num2){
		$resp = $a1 - $a2;
		echo ("O resultado da $num2 dos números escolhidos é igual a $resp");
	}
	


	

 ?>