<?php 

	function titulo (){
		echo ("Calculando valores: <br/>");
	}
	function somaValor($num1,$num2){
		
		$resp= $num1 + $num2;
		echo("A soma de $num1 mais $num2 é $resp");
	}

	$valor1=10;  $valor2=20;
	//executar ou chamar função
	titulo ();
	$resposta = somaValor($valor1, $valor2);
	echo("A soma de $num1 e $num2 é $resposta");
	somaValor($valor1,$valor2);
  	



 ?>