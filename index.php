<?php

define ("Maximo_Clientes",100); //definindo uma constante
echo Maximo_Clientes;


?>

<?php

		//trabalhando com atribuições


		$var = 5 ;
		echo $var;
		$var =  "Mussum <br>"; 
		echo $var;

?>

<?php 

 	//++$variavel //incrementando
 	//$variavel++
 	//--$variavel//decremento
 	//$variavel--


?>

<?php

		/*operadores aritméticos

		+adição
		-subtração
		*multiplição
		/ divisão

		*/

		$a = 2;
		$b = 4;

		echo $a+$b;
		echo $a-$b;
		echo $a*$b;
		echo $a/$b;

		echo("O resultado do calculo é: ($a+$b)");
		$c = $a*$b;
		echo ("O resultado é:" .$c);
		echo $a%$b;
?>		

<?php

	//Tabuada 2

         
        $tab = 2;
		$num = 0;
		
		While($num <= 10){

		echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
		$num ++;
		

		}

		

            
?>



<?php

/*operadores de relacionamento

== igual
===identico

!= ou <> diferente

< menor
> maior
< = menor igual
> = maior igual

*/


 $x3po = 5;
 $yoda = 6;



 if ($x3po == $yoda){

 	echo "$x3po e $yoda são iguais";

} else if ($x3po != $yoda){

	echo "As variaveis são diferentes";
}

?>

<?php

//Financiamento


 

 echo ("Finaciamento de uma casa cujo o valor é: 400.000 mil reais");
 
 $condição = "A vista";
 $val = 400.000;
 

 if($condição == "A vista"){
    
  $a = $val * 15 / 100;  

	echo ("O valor da casa com desconto pela compra a vista é de:" .$a);
 
 } 


else if ($condição == "debito" ){

	$b = $val * 10 / 100;

	echo ("O valor da casa com desconto pela compra por debito é de:" .$b);
}


 else if ($condição == "credito" ){

	$b = $val * 5 / 100;

	echo ("O valor da casa com desconto pela compra por credito é de:" .$b);
}


//parcelados

	$jurosMes = 0;
	$parcelaMes = 0;
	$jurosParcela = 0;
	

	$parcelaMes = $val / 12; //100

	$jurosParcela = $parcelaMes * 0.125; //12.5
	$total = $jurosParcela + $parcelaMes;


	$totalAno = $total * 12;

	echo("<br>O valor de cada parcela será de: " .$total);
	echo("<br>O valor total é de: " .$totalAno);
	echo("<br>O valor após 10 anos será: " . $totalAno * 10);
?>



<?php






?>