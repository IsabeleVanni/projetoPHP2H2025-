<?php 
/*
 $alunos = array("Izzy", "GK");

 $idade[0]= 18;
 $idade[1]= 20;

echo ("Nome: " . $alunos [0] ."</br>" . " Idade: " . $idade [0] . "</br>");

echo ("Nome: " . $alunos [1] ."</br>" . " Idade: " . $idade [1] . "</br>");

$email[]= "izzy.bbs@gmail.com";
$email[]= "gk.black@gmail.com";

echo("</br>");
echo "<pre>";
print_r($email);
echo "</pre>";
echo("</br>");
echo "<pre>";
var_dump($email);
echo "</pre>";

echo("</br>");

$alunos = array ("Yasmim",10, "yaslinda@gmail.com",25.5,true);

echo "<pre>";
var_dump($alunos);
echo "</pre>";
echo("</br>");
echo "<pre>";
print_r($alunos);
echo "</pre>";

for ($i=0; $i < 6 ; $i++) {
	$vetor[$i] = 12;
}


for ($i=0; $i < 6 ; $i++) {
	echo "O valor do vetor: " . $vetor[$i] . "</br>";
}
*/

$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "Salário de João é " . $salarios['João'] . "<br />";
echo "Salário de Pedro é " . $salarios['Pedro'] . "<br />";
echo "Salário de Maria é " . $salarios['Maria'] . "<br />";

$salarios['João'] = "Alto";
$salarios['Pedro'] = "Médio";
$salarios['Maria'] = "Baixo";

echo "Salário de João é " . $salarios['João'] . "<br />";
echo "Salário de Pedro é " . $salarios['Pedro'] . "<br />";
echo "Salário de Maria é " . $salarios['Maria'] . "<br />";
 ?>
