<?php 
	require_once('conexion.php'); 
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Oficina</title>
	<meta charset="utf8" />
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
				<th scope="col">No_Pregunta&nbsp;</th>
				<th scope="col">Tipo&nbsp;</th>
				<th scope="col">Depto&nbsp;</th>
				<th scope="col">Pregunta&nbsp;</th>
			</tr>
 
			<?php
				$resultado = sqlsrv_query($conn,"SELECT Cuestionario.ID_pregunta, TipoP.Nombrep, Departamento.Nombred, Cuestionario.Pregunta
				 FROM Cuestionario INNER JOIN TipoP ON Cuestionario.ID_tipo = TipoP.ID_tipo INNER JOIN Departamento ON Cuestionario.ID_departamento = Departamento.ID_departamento"); 
					while($fila = sqlsrv_fetch_array($resultado))
					{
						echo "<tr>";
						echo "<td>".$fila['ID_pregunta'] ."</td>" ;
						echo "<td>".$fila['Nombrep'] ."</td>" ;
						echo "<td>".$fila['Pregunta'] ."</td>" ;
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