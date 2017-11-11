<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<?php 
	$nombre = $_POST["Nombre"];
	$ape = $_POST["apepa"];
	$clave = $_POST["No_empleado"];
	$puesto = $_POST["puesto"];
	$depto = $_POST["depto"];
	sqlsrv_query($conn," INSERT INTO Evaluador(Nombreev, Apellido_paterno, ID_puesto, ID_departamento, No_empleado)  
    VALUES('$nombre','$ape', $puesto, $depto, '$clave')"); 
	
?>                   
</body>
</html>
<?php
	sqlsrv_close($conn);
?>