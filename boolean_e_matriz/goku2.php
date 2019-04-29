<html>
<head>
	<meta charset="UTF-8">
<style>
	body{
	  padding-bottom:10%;
	  
	  background-image: url(https://i.imgur.com/tNaXzPm.jpg) !important;
	  background-repeat: no-repeat;
	  background-size: 2000px 1600px;
	  background-size:cover;
	}


	/*
	https://imgur.com/a/hFulyT3
bottom:0;
background-image: url(https://images7.alphacoders.com/677/thumb-1920-677266.png) !important;
background-image: url(https://i.imgur.com/pH3kpwS.jpg) !important;
Digite um valor inteiro. Se o resultado for maior ou igual a zero, retornará true. Caso contrário, será false. Experimente!
https://i.imgur.com/RCgyLZr.jpg

	*/

	.box{
		/*background-color: black;
		opacity: 0.5;*/

		width: 320px;
		height: 470px;
		background: rgba(0,0,0,0.5);
		color: #fff;
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;

	}

	.box input{

		width: 100%;
		margin-bottom: 20px;
	}

	.box input[type="text"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
	}

	.box input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		background: #0f4eaf;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
	}

	.box input[type="submit"]:hover{
		cursor: pointer;
		background: #4c8ff7;
		color: #000;
	}

	.box h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 30px;
		color: #f44444;
	}

	.box p{
		margin: 0;
		padding: 0;
		font-weight: bold;

	}




</style>
<title>Valores numericos</title>	
</head>
<body>
	<div class="box">
		<form method="POST" action="">

			<h1>
				Valores numéricos
			</h1>
			<p>
				Já testamos os valores booleanos, agora vamos ver os numéricos! Eles podem ser escritos até mesmo em notação científica, veja e teste você mesmo! Exemplos:<br>
				<i>
				-Inteiro: 5<br>
				-Negativo: -4<br>
				-Octal: 0123<br>
				-Real: 4.3<br>
				-Hexadecimal: 0x1A<br>
				-N. Científica: 4e23</i>
				
			</p>
			<input type="text" name="valor" placeholder="Digite aqui">

			<input type="submit" name="botao">

			<?php
			
			$valor = $_POST["valor"];
/*
			if(!(is_nan($valor))){
				echo $valor;
			}else{
				echo $valor;
				echo "Ei, você não digitou um número!";
			}
*/
			if(is_numeric($valor)){
				echo "O valor $valor é numérico!";
			}
			else{
				echo "Você não digitou um valor numérico...";
			}

			?>
		
			</h1>
		</form>
	</div>
</body>
</html>