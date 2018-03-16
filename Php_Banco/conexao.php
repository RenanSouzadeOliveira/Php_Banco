<?php
class BancodeDados{
	
	private $host = "localhost";
	private $user = "root";
	private $senha = "";
	private $banco = "banco";
	public $con;
// conexão com o banco
	function conecta() {
		$this->con= @mysqli_connect9($this->host,$this->user,$this->senha, $this->banco);

		if(!$this->con){

			die (" Problemas com a conexão");
		}

	}
// fecha a conexao
	function fechar(){
		mysqli_close($this->con);
		return;
	}
//executar select
	function sqlquery($string,$caminho){

		$resultado = @mysqli_query(this->con, $string);

		if(!$resultado) {
			echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br /><br />';
				die('<b>Query Inválida:</b>' . @mysqli_error($this->con));
		} else {
			$num = @mysqli_num_rows($resultado);
			if($num==0){
				echo "<b>Código: </b>não localizado !!!!<br /><br />";
				echo '<input type="button" onclick="window.location='."'$caminho'".';" value="Voltar"><br /><br />';
				exit;
			} else {
				$dados=mysqli_fetch_array($resultado);
			}
		}
		$this->fechar();
		return $dados;
	}


} ?>