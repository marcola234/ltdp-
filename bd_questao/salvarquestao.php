<?php
	
	var_dump ($_POST);
	
	$questao = $_POST['questao'];
	$enunciado = $_POST['enunciado'];
	$materia = $_POST['materia'];
	
	
	$alternativaum = $_POST['alternativaum'];
	$certoum = $_POST['certoum'];
	$justificativaum = $_POST['justificativaum'];
	
	$alternativaum = $_POST['alternativadois'];
	$certoum = $_POST['certodois'];
	$justificativaum = $_POST['justificativadois'];
	
	$alternativaum = $_POST['alternativatres'];
	$certoum = $_POST['certotres'];
	$justificativaum = $_POST['justificativatres'];
	
	$alternativaum = $_POST['alternativaquatro'];
	$certoum = $_POST['certoquatro'];
	$justificativaum = $_POST['justificativaquatro'];
	
	$alternativaum = $_POST['alternativacinco'];
	$certoum = $_POST['certocinco'];
	$justificativaum = $_POST['justificativacinco'];
	
	
	/*configurco de enderecmento do bnco de ddos*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de acesso o bnco de ddos*/
	$nome_banco = "bd_questao";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "Não foi possível connectar ao servidor";
		exit;
		}else{/*senao*/
		echo "<h1>Conectou!</h1>";
	}
	
	
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
	
	//Inserir a questao 
	$sql = "INSERT INTO questao VALUES ('', '$questao', '$enunciado', '$materia')";
	$sqlexecutado = mysql_query($sql);
	//pegar o id que foi inserido
	$idquestao = mysql_insert_id();
	
	
	
	
	
	inserirAlternativa ($idquestao, $alternativaum, $certoum, $justificativaum);
	inserirAlternativa ($idquestao, $alternativadois, $certodois, $justificativadois);
	inserirAlternativa ($idquestao, $alternativatres, $certotres, $justificativatres);
	inserirAlternativa ($idquestao, $alternativaquatro, $certoquatro, $justificativaquatro);
	inserirAlternativa ($idquestao, $alternativacinco, $certocinco, $justificativacinco);
	
	
	//Repetir isso 5 vezes
	
	
	
	
	
	function inserirAlternativa ($idquestao, $alternativa, $certo, $justificativa)
	{
			echo "aqui";
			//Inserir a alternativa um 
			$sql = "INSERT INTO alternativas VALUES ('', $idquestao, '$alternativa', $certo)";
			$sqlexecutado = mysql_query($sql);
			//pegar id da alternativa um 
			$idalternativa = mysql_insert_id();
			
			
			//Inserir a justificativa um 
			$sql = "INSERT INTO justificativa VALUES ('', $idalternativa, '$justificativa')";
			$sqlexecutado = mysql_query($sql);
			//pegar id da alternativa um 
			$idjustificativa = mysql_insert_id();
	}
	mysql_close($conexao);
?>

</body>
</html>