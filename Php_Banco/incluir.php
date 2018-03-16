<!DOCTYPE> 
<html>
	<head>
		<title> PHP + SQL </title>
		<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
	</head>
	<body>
		<?php
			include_once('conexao.php');

			$mysql = new BancodeDados();
			$mysql->conecta();

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$sexo = $_POST['sexo'];
			$ddd = $_POST['ddd'];
			$telefone = $_POST['telefone'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$bairro = $_POST['bairro'];
			$pais = $_POST['pais'];
			$login = $_POST['login'];
			$senha = $_POST['senha'];

			$sqlinsert = "insert into cliente(nome,email,sexo,ddd,telefone,cidade,estado,bairro,pais,logon,senha) values ('$nome','$email','$sexo',$ddd,'$telefone','$cidade','$estado','$bairro','$pais','$login','$nome')";

			$resultado = $mysql->sqlstring(sqlinsert,"INCLUSÃO");
			?>
			<br /><br />
			<input type='button' onclick="window.location='index.php';" value="Voltar">
	</body>
</html>			