<?php
	echo "GET:" . var_dump($_GET) . "<br>";
	echo "POST:" . var_dump($_POST) . "<br>";
	echo "posicao nome" . $_POST['nome'];

	
	/*configuçao de endereço do banco de dados*/
 $servidor = "localhost";
 $usuario = "root";
 $senha = "" ;
 
/*configuraçao de acesso do banco de dados */
 $nome_banco = "bd_centro_interesse";
 
 $conexao = mysql_connect($servidor, $usuario, $senha);
 
 $banco = mysql_select_db($nome_banco, $conexao) or die( "nao foi possivel conectar ao banco MYSQL");
 
 "INSERT * FROM PESSOA VALUES(, ".$matricula.", '".$nome)"
 
 var_dump ($banco);

 echo "<br>";
 
 echo $conexao;

 echo "<br>";
 
 /*verifica se a conexao realmente foi criada*/

 /*se (nao conexao) entao, ou seja, conexao e falsa*/
 
 if (!$conexao) {
 
 	echo "nao foi possivel conectar ao banco MYSQL.";
 
 			exit;

}/*senao*/
 
 			else {
 	
 			echo "parabens !! a conexao ao banco de dados ocorreu normalmente!.";
 }
 ?>
  
 
	
	
	
?>
