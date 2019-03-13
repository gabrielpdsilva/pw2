<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			
			font-size: 15px;
			padding: 10px;
			margin: 35px; /*parte da esquerda*/
			border: 3px solid black;
			width: 400px; /*Tamanho da caixa*/
		}

		body {
			font-family: arial;
		}

		h1{
			margin: 10px;
		}

		

		#img1{
			width: 200px;
			height: 180px;
			margin: 30px;
			/*position: absolute;*/
		}

	</style>
<title>Formulário</title>
</head>
	<body>
		<form enctype="multipart/form-data" method="POST" action="cadastro2.php">
		<img src="https://orig00.deviantart.net/a920/f/2010/095/9/b/konata_error_404_by_zarkfx.png" id="img1">
		<?php
		header('Content-Type: text/html; charset=UTF-8');
		?>
		<h1>Formulário de cadastro:</h1>
			<div class="div1">
				
					<p> Nome: <input type="text" name="nome" size=30></p>
					<p> Endereço: <input type="text" name="endereco" size=30></p>
					<p> Nº: <input type="text" name="numero" size=30></p>
						<select name="uf">
							<option>SP</option>
							<option>RJ</option>
							<option>MG</option>
						</select>
						<select name="pais">
							<option>Brasil</option>
							<option>Argentina</option>
							<option>Chile</option>
						</select>

					<!-- <p> Nº: <input type="text" name="numero" size=30> -->
					<p> CEP:  <input type="text" name="cep" size=30></p>
					<p> Email: <input type="text" name="email" size=30></p>
					<p> RG: <input type="text" name="rg" size=30></p>
					<p> CPF: <input type="text" name="cpf" size=30></p>
					<p> Telefone: <input type="text" name="telefone" size=15></p>
					<p> Time coração: <input type="text" name="time" size=30></p>
					<p><input type="submit" value="Enviar"></p>
					<p><input type="submit" value="Limpar"></p>
				</form>
			</div>
	</body>
</html>