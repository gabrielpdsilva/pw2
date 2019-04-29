<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title>
	Exercicio3
</title>
</head>
<body>
	
	<?php

	$valor = 5;
	$resultado = 1;
	for($i = $valor; $i > 1; $i--){
		$resultado *= $valor; 
		$valor--;
	}
 
	echo "O resultado é $resultado";


	?>

</body>
</html>