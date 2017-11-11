<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<?php 
	$numero= $_POST["preg"];
    $nueva = $_POST["nupreg"];
    $tipe = $_POST["tipreg"];    
	sqlsrv_query($conn,"UPDATE Cuestionario SET Pregunta='$nueva', ID_tipo=$tipe
    where ID_pregunta= $numero");  	
?>                   
</body>
</html>
<?php
	sqlsrv_close($conn);
?>