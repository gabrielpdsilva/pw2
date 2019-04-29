<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title>
	Exercicio8
</title>
</head>
<body>
	
	<?php

	//******************CÁLCULO NORMAL*******************************//
/*


	$nota1 = 9;
	$nota2 = 8;
	$nota3 = 7;
	$media = ($nota1 + $nota2 + $nota3) / 3;

	if($media >= 6){
		echo "Sua média foi $media e você foi aprovado.";
	}else{
		echo "Sua média foi $media e você foi reprovado.";
	}
*/
	
	//******************CÁLCULO COM ARRAYS*******************************//
	$notas = array(9, 8, 1);
	$media = array_sum($notas) / count(array_filter($notas));

	if($media>=6){
		echo "Sua média foi $media e você foi aprovado.";
	}else{
		echo "Sua média foi $media e você foi reprovado.";
	}

	?>

</body>
</html>