<html>
<head>
	<meta charset="UTF-8">
<style>
	body{
	  padding-bottom:10%;
	  
	  background-image: url(https://i.imgur.com/RCgyLZr.jpg) !important;
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

	mark.fria{
		color:#75a4ef;
	    background: none;
	}

	mark.quente{
		color:#ff0000;
		background: none;
	}

</style>
<title>Matrizes</title>	
</head>
<body>
	<div class="box">
		<form method="POST" action="">

			<h1>
				Matrizes
			</h1>
			<p>
				Por fim as matrizes. Elas são como os arrays(armazenam vários valores), mas são multidimensionais!<br><br>
				Neste exercício, foi criada uma matriz de cores, diferenciando <mark class="fria">cores frias</mark> das <mark class="quente">cores quentes</mark>.
				Apresentando os resultados, temos o seguinte:
				
			</p>
			<!--
			<input type="text" name="valor" placeholder="Digite aqui">

			<input type="submit" name="botao"> -->

			<?php
			
			$cor["fria"][1] = "Verde";
			$cor["fria"][2] = "Azul";
			$cor["fria"][3] = "Roxo";
			$cor["quente"][1] = "Amarelo";
			$cor["quente"][2] = "Laranja";
			$cor["quente"][3] = "Vermelho";


			echo "<br>Cores frias: ".$cor["fria"][1]."; ".$cor["fria"][2]."; ".$cor["fria"][3].".<br><br>";
			echo "Cores quentes: ".$cor["quente"][1]."; ".$cor["quente"][2]."; ".$cor["quente"][3].".";

			?>
		
			</h1>
		</form>
	</div>
</body>
</html>