<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<?php 
	$preg= $_POST["nupreg"];
    $tipe = $_POST["tipreg"];
    $depto = $_POST["depto"];    
	sqlsrv_query($conn,"INSERT INTO Cuestionario(ID_tipo, ID_departamento, Pregunta)  	
	VALUES($tipe, $depto, '$preg')");
?>                   
</body>
</html>
<?php
	sqlsrv_close($conn);
?>