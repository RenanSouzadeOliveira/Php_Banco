<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user,  $pass) or  die (mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<html>

<head>

<title>Autenticando o usuário</title>
<script type="text/javascript">
		function loginverdadeiro(){
			setTimeout("window.location='painel.php'", 5000);
		}

		function loginfalso(){
			setTimeout("window.location='login.php'", 5000);
		}


	
</script>

</head>

<body>


<?php
$email=$POST['email'];
$senha=$POST['senha'];
$sql  = mysql_query("SELECT * FROM cliente WHERE email  = '$email' and senha =  '$senha'"); // faz consulta no banco
$row = mysql_num_rows($sql); // conta a qrd de caracteres q vem do banco
	
	if($row > 0) {
		session_start(); // inicia sessao para o usuario
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<center>login efetuado com sucesso! Aguarde um instante</center>";
		echo "<script>loginverdadeiro()</script>";
	} else {

		echo"<center> Email do usuário ou senha inválido! Aguarde um instante para tentar novamente </center>";
		echo"<script>loginfalso()</script>";
	}
	
?>

</body>
</html>