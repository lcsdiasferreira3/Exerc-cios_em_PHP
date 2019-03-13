<?php

//Execício 1
$num = -2;

	if($num == 0){
	echo ("O valor da variavel é igual a zero ");

} 	else if ($num < 0){
	echo ("O valor da variavel é negativa ");


}	else if ($num > 0){

	echo("O valor da variavel é positiva");
}


//Exercício 2

	$tabuada = 6;
	$numero = 0;

	While($numero <= 10){

		echo $numero . "x" . $tabuada . "=" . ($numero * $tabuada) . "<br>";
		$numero++;

	}

//Exercício 3

	$num = 7;

	if( $num % 2 == 0  ){
		echo "Esse valor é par";
	
	}  else{ 

	echo "Esse valor é ímpar"; 
}


//Exercício 5



	$a = 3;
	$b = 9;

	if ($a < $b){
		echo " <br> O valor de A é menor que o valor de B ";

	} else if ($a > $b){
		echo " <br> O valor de A é maior que o valor de B";
	}

//Exercício 6


	$notas = array( 1, 1, 1);

	$mg0 = $notas[0] + $notas[1] + $notas[2];
	$mg = $mg0 / 3;

	if($mg >= 6){
		echo ("<br>O aluno foi aprovado com a media:" . $mg);
	} else if ($mg <= 5.99){
		echo ("<br>O aluno foi reprovado com a media:" . $mg);
	}


//Exercícios 7

		$nom = "João";
		$ida = 19;

	if ($ida < 18){
		echo ("<br>" . $nom . " não é maior de 18 e tem " . $ida . " anos de idade");
	
	}else if ($ida >= 18){
		echo ("<br>" . $nom . " é maior de 18 e tem ". $ida . " anos de idade");
	}	



//Exercício 8

	$x = 3;
	$y = 20;

	$soma = $x + $y;


	if($soma > 20){
		$resul = $soma + 8;
		echo ("<br>Como o valor apresentado é maior que 20 foi acrescentado ao valor o número 8 cuja o resultado final é: " . $resul);
	} else {
		$resul = $soma - 5;
		echo ("<br>Como o valor apresentado é menor ou igual a 20 foi realizado uma subtração com o número 5 cuja o resultado final é: " . $resul);

	}

//Exercício 9

	$nu = 99;

	if($nu % 10 == 0 ){
		echo "<br> O número descrito é divisivel por 10";
	}

	else if($nu % 5 == 0 ){
		echo "<br> O número descrito é divisivel por 5";
	}

	else if($nu % 2 == 0 ){
		echo "<br> O número descrito é divisivel por 2";
	}
	else
		echo "<br> Esse número não é divisível por 10, 5 e 2 ";


//Exercício 10


	$n = "Fulana";
	$i = 23;	
	$s = "Feminino";

	if($s == "Feminino" && $i < 25){
		echo "<br> ACEITA!";
	
	} else {
		
		echo "<br> NÃO ACEITA!";
	}



?>