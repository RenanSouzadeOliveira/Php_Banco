<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>

<div id="tudo">
	<div id="topo"> <!--LOGO -->
		<div id="logo">
			<img src="Imagens/logo.png"/> <!--imagem do logo -->
		</div>

		<div id="login">  <!--Contato -->
			<p>Bem-vindo ao maior portal de esportes do Brasil</p>
			<p>ESPORTEDIARIO
			@GMAIL.COM </p>
		</div>

	</div>

	<div id="menu"> <!-- MENU -->
	<a href="index.php">HOME</a>
	<a href="login.php">LOGIN</a>
	<a href="cadastrar.php">CADASTRO</a>	
	</div>

	<div align="center"id="imagemp"> <!--imagem do banner -->
		<img src="Imagens/banner.jpg"/> 
	</div>
	
	<div id="logon"> <!-- PARTE DOS CAMPOS E BOTAO -->
	<form id="login" name="login" method="post" action="validacao.php" >
    
      <b>Email:</b>
      <input name="email" type="text" id="email" size="70" maxlength="60" /><br /><br />
	  <b>Senha:</b>
      <input name="email" type="text" id="email" size="70" maxlength="60" /><br /><br />
 
      	<p><input  name="login" type="submit"  value="Login" /></p>
       
 
      <p>  </p></td>
	</div>
	</div>
	
</body>
</html>