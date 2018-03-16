<!DOCTYPE> 
<html>
	<head>
		<title> Cadastro </title>
		<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="stylec.css">
	</head>
	<body>
		<div id="topo"> <!--LOGO -->
		<div align="center"id="logo">
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
	<a href="login.html">LOGIN</a>
	<a href="cadastrar.php">CADASTRO</a>	
	</div>

	<div align="center"id="imagemp"> <!--imagem do banner -->
		<img src="Imagens/banner.jpg"/> 
	</div>
<div  id="corpo">	<!-- DIV QUE POSICIONA OS CAMPOS -->
		<!--enviando dados -->
		<form name="usuario" action="cadastrando.php" method="post" enctype = "multipart/form-data">
			<h3> Complete os campos abaixo </h3>
			<b>Nome:</b>
			<input type="text" name="nome"><br /><br />	
			<b>Email:</b>
			<input type="text" name="email"><br /><br />
			<b>Sexo:</b>
			<input name="sexo" type="radio" value="Masculino" checked="checked" />
       		 Masculino
        	<input name="sexo" type="radio" value="Feminino" />
       		 Feminino *</span><br /><br />
      			<b>DDD:</b>
      			<input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
      			<b>Telefone:</b>
        		<input name="telefone" type="text" id="telefone" />
        		<span class="style3">*Apenas números</span><br /><br />
        		<b>Endereço:</b>
      			<input name="endereco" type="text" id="endereco" size="70" maxlength="70" /><br /><br />
        		<b>Cidade:</b>
      			<input name="cidade" type="text" id="cidade" maxlength="20" /><br /><br />
      			<b>Estado:</b>
      			<select name="estado" id="estado">
        		<option>Selecione...</option><br /><br />
        		<option value="AC">AC</option>
        		<option value="AL">AL</option>
        		<option value="AP">AP</option>
        		<option value="AM">AM</option>
        		<option value="BA">BA</option>
        		<option value="CE">CE</option>
        		<option value="ES">ES</option>
        		<option value="DF">DF</option>
        		<option value="MA">MA</option>
        		<option value="MT">MT</option>
        		<option value="MS">MS</option>
       	 		<option value="MG">MG</option>
        		<option value="PA">PA</option>
        		<option value="PB">PB</option>
        		<option value="PR">PR</option>
        		<option value="PE">PE</option>
        		<option value="PI">PI</option>
        		<option value="RJ">RJ</option>
        		<option value="RN">RN</option>
        		<option value="RS">RS</option>
        		<option value="RO">RO</option>
        		<option value="RR">RR</option>
        		<option value="SC">SC</option>
        		<option value="SP">SP</option>
        		<option value="SE">SE</option>
       			<option value="TO">TO</option></select><br /><br />
       			<b>Bairro:</b>
      			<input name="bairro" type="text" id="bairro" maxlength="20" /><br /><br />
      			<b>País:</b>
     			<input name="pais" type="text" id="pais" maxlength="20" /><br /><br />
     			<b>Login:</b>
      			<input name="login" type="text" id="login" maxlength="12" /><br /><br />
      			<b>Senha:</b>
      			<input name="senha" type="password" id="senha" maxlength="12" /><br /><br />
      			<p>
        			<input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" />
       				<input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
         		</p>
    </div>
	</body>	