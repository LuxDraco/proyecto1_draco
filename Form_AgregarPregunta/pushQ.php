<?php 
	require_once('conexion.php'); 
?>
<?php
		$qtn= $_POST["newQ"];
		$type = $_POST["qSType"];
		$dep = 2;//$_POST["depto"];
		sqlsrv_query($conn,"INSERT INTO Cuestionario(ID_tipo, ID_departamento, Pregunta)  	
		VALUES($type, $dep, '$qtn')");
		include("QtnAdded.html");
?>               
<?php
	sqlsrv_close($conn);
?>