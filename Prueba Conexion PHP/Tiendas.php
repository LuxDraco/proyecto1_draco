<?php 
	require_once('conexion.php'); 
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
	<title>Oficina</title>
	<meta charset="utf-8" />
    <meta name="description" content="Empleados" />  
    <link rel= "stylesheet" href="css/estilos3C.css">  
</head>
<body>
<section id="contenedorgeneral"> 
	<header>
        <h1>Empleados de oficina</h1>	
	</header>
	<nav>
	</nav>
    <section id="contenedor">  
		TABLA DE DATOS
    	<section id="principal">
			<table>
			<tr>
				<th scope="col">Mes&nbsp;</th>
				<th scope="col">Semana&nbsp;</th>
				<th scope="col">Porce_Conteo&nbsp;</th>
			</tr>
 
			<?php
				$resultado = sqlsrv_query($conn,"SELECT * FROM Seguimiento"); 
				while($fila = sqlsrv_fetch_array($resultado))
				{
					echo "<tr>";
					echo "<td>".$fila['Mes'] ."</td>" ;
					echo "<td>".$fila['Semana'] ."</td>" ;
					echo "<td>".$fila['Porce_Conteo'] ."</td>" ;
					echo  "</tr>";
				}
			?>   
			</table>
		</section>
	</section> 
    <footer>
    	SISTEMA DE GESTIÓN DE BANCOS 
    </footer>
</section> 

</body>
</html>
<?php
	sqlsrv_close($conn);
?>