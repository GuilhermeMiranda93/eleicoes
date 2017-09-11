<?php


try
{

	$voto = $_POST['voto'];


	$con = new PDO("mysql:host=localhost;dbname=eleicoes", "root", "040593"); 
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO votacoes VALUES(null, ".$voto.")";

	$stmt = $con->prepare( $sql );

	$result = $stmt->execute();

	if ( ! $result )
	{
		var_dump( $sql->errorInfo() );
		exit;
	}
	else{
		echo "true";
	}
}
catch ( PDOException $e )
{
	echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}



?>