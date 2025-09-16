<?php /* 

// ATIVIDADE 1

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

// ATIVIDADE 2

$valor=1;
if ($valor %10 == 0) {
echo("O $valor é divisivel por 10! </br>");
}

else if ($valor %5 == 0) {
echo("O $valor é divisivel por 5! </br>");
}

else if($valor %2 == 0) {
echo("O $valor é divisivel por 2! </br>");
}

else{
echo("O $valor não é divisivel pelos números 10, 5 e 2!");
}

?>

// ATIVIDADE 3
<?php
$nome="Izzy";
$sexo= "Feminino";
$idade= 34;

if($sexo=="Feminino" && $idade<25){
echo("$nome: ACEITA");
}
else{
echo("$nome: NÂO ACEITA");
}
?>

// ATIVIDADE 4
<?php
$n1= 1; 
$n2= 2;
$n3= 3;
 
if ($n1 >= $n2 && $n1 >= $n3){
	if($n2 >= $n3){
		echo "$n1, $n2 e $n3";
} 	else {
	echo "$n1,$n3,$n2";
}
}elseif ($n2 >= $n1 && $n2 >= $n3){
	if ($n1 >= $n3) {
		echo "$n2,$n1,$n3";
} 	else {
	echo "$n2,$n3,$n1";
}}
else{
 if ($n1 >= $n2) {
 	echo "$n3,$n1,$n2";
 } else{
 	echo "$n3,$n2,$n1";
 }
}
?> */
?>
