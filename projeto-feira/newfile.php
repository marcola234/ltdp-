<?php
	echo "GET:" . var_dump($_GET) . "<br>";
	echo "POST:" . var_dump($_POST) . "<br>";
	echo "posicao nome" . $_POST['nome'];

	
	/*configu�ao de endere�o do banco de dados*/
 $servidor = "localhost";
 $usuario = "root";
 $senha = "" ;
 
/*configura�ao de acesso do banco de dados */
 $nome_banco = "bd_centro_interesse";
 
 $conexao = mysql_connect($servidor, $usuario, $senha)
 
 $banco = mysql_select_db($nome_banco, $conexao);
 
 
 
	
	
	
?>
