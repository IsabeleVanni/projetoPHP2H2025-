<?php 

	//Você deverá mostra no final
	//Salário Folha: R$
	//Desconto INSS: R$
	//Desconto IR: R$
	//Salário Líquido: R$

 $dir= 0;
 $salario= 3000;
 $salariof=0;
 $inss= $salario * $dir;
 $salariob= $salario - $inss;

 	if ($salariob > 0 && $salariob < 1519) {
 		$dir= 7.5;

 	}
 	else if ($salariob > 1518 && $salariob < 2793.89){
 		$dir= 9.0;

 	}
 	else if ($salariob > 2793.88 && $salariob < 4190.84){
 		$dir= 12.0;
 	}
 	else if ($salariob > 4190.83 && $salariob < 8157.41){
 		$dir= 14.0;
 	}


	echo("Sistema de folha de pagamento<br/><br/>");	
	echo "Desconto INSS: R$ $inss <br/>";
	echo "Desconto IR: R$ $dir  <br/>";
	echo "Salário Líquido: R$$salariob <br/>";

 ?>