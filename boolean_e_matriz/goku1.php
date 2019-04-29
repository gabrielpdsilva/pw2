<html>
<head>
	<meta charset="UTF-8">
<style>
	body{
	  padding-bottom:10%;
	  
	  background-image: url(https://i.imgur.com/H8wdXH7.jpg) !important;
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
<title>Valores booleanos</title>	
</head>
<body>
	<div class="box">
		<form method="POST" action="">

			<h1>
				Valores booleanos
			</h1>
			<p>
				Dependendo do valor que você inserir em PHP, pode retornar true ou false. Por exemplo, se você digitar um valor que seja menor ou igual a 0, nada será printado na tela, então é false. Caso contrário, aparecerá "1", ou seja, true! Experimente!<br><br>
				<i>-Valores true: 1<br>
				-Valores false: vazio </i>
				
			</p>
			<input type="text" name="entrada" placeholder="Digite aqui">

			<input type="submit" name="botao">

			<?php
			$valor = $_POST["entrada"];
			if($valor){
				echo true;

			}
			else{
				echo false;

			}
			?>
		
			</h1>
		</form>
	</div>
</body>
</html>