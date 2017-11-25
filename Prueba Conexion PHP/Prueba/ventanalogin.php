<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<?php 
	$nom= $_POST["nombre"];
    $depto = $_POST["depto"];
    $pass = $_POST["passw"]; 
    $contr=sqlsrv_query($conn,"SELECT Password FROM Usuarios WHERE ID_departamento = $depto");
    if( sqlsrv_fetch( $contr ) === false) {
        die( print_r( sqlsrv_errors(), true));
   }
$pasa = sqlsrv_get_field( $contr, 0);
if($pass==$pasa) 
echo 'Exito';
else
echo 'WRONG';
echo $pass;
echo $pasa;
?>                   
</body>
</html>
<?php
	sqlsrv_close($conn);
?>