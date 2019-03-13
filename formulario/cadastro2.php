<!DOCTYPE html>
<html>
	<head>
		<style>
			
			body{
				font-family: arial;
			}

			#img2{
				width: 200px;
				height: 155px;
			}

			form{
				font-size: 15px;
				padding: 10px;
				margin: 35px; /*parte da esquerda*/
				border: 3px solid black;
				width: 650px; /*Tamanho da caixa*/
				height: 350px;
			}

		</style>
	<title>Dados cadastrados com sucesso!</title>
	</head>
	<body>
		<form>

			<img src="http://4.bp.blogspot.com/-WrqxztKbQek/TlOXtN-BE-I/AAAAAAAACE0/HVmTB5Le8jc/s1600/125722428056.jpg" id="img2">
	<?php
		
			header('Content-Type: text/html; charset=UTF-8');
			
			echo "<br><b>Dados cadastrados com sucesso!</b><br><br>";
			echo "Obrigado pelo cadastro.<br>Confira os seus dados abaixo:
				  <br><b>>Nome: </b>".$_POST["nome"]."<br>
				  <b>>Endereço completo: </b>".$_POST['endereco'].
				  ", <b>CEP: </b>".$_POST['cep'].", <b>Nº: </b>".$_POST['numero'].
				  "<b>, UF: </b>".$_POST['uf']."<b>, País: </b>".$_POST['pais'].
				  "<br><b>>E-mail: </b>".$_POST['email']."<b>, RG: </b>".$_POST['rg'].
				  "<b>, CPF: </b>".$_POST['cpf']."
				  <br><b>>Telefone: </b>".$_POST['telefone'].
				  "<b>, time de coração: </b>".$_POST['time'].
				  "<br><br>Observação: Se os dados não estiverem corretos, mandar e-mail para: exemplo@exemplo.com";
		
	?>
		</form>
	</body>
</html>