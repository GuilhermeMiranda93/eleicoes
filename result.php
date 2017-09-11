<?php


try
{

	$con = new PDO("mysql:host=localhost;dbname=eleicoes", "root", "040593"); 
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "select * from votacoes";

	$result = $con->query( $sql );

	$rows = $result->fetchAll( PDO::FETCH_ASSOC );

	$silvia = 0;
	$pedro = 0;
	$votos = 0;

	foreach($rows as $key){

		if($key['valor'] == 1){
			$pedro++;
		}
		else if($key['valor'] == 2){
			$silvia++;
		}

		$votos++;
	}

	echo "Quantidade de votos: ",$votos,'<br>';
	echo "Pedro: ",$pedro,'<br>';
	echo "Silvia: ",$silvia,'<br>';

}
catch ( PDOException $e )
{
	echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}



?>