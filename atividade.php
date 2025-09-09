<?php 	

	$val1= 0;
	$val2= 10;
	$soma = $val1 + $val2;

	if ($soma > 20) {
		$soma= $soma + 8;
	}
	else if($soma <= 20){
		$soma = $soma - 5;
	}
  echo ("Os valores escolhidos foram: $val1 e $val2 </br>");
  echo ("O valor final é: $soma");
 ?>