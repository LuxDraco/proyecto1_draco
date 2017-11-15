<?php
$serverName = "matrix01.database.windows.net"; 
$connectionInfo = array( "Database"=>"SOTS", "UID"=>"garou00", "PWD"=>"Lilu1106**");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
}else{
	echo "Conexión no se pudo establecer.<br />";
	die( print_r( sqlsrv_errors(), true));
}
?>