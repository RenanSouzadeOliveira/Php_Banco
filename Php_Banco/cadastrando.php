<html>
<head>
	<title>Cadastrando...</title>

</head>
<body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexao = mysql_connect($host,$user,$pass) or die (mysql_error());
	mysql_select_db($banco) or die (mysql_error());
?>

<?php
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$sexo = $_POST['sexo'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$bairro = $_POST['bairro'];
	$pais = $_POST['pais'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$sql = mysql_query("INSERT INTO cliente(nome,email,sexo,ddd,telefone,cidade,estado,bairro,pais,login,senha);
	 VALUES('$nome','$email','$sexo','$ddd','$telefone','$cidade','$estado','$bairro','$pais','$login','$senha')";
?>
</body>
</html>