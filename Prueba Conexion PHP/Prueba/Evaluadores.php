<?php 
    require_once('conexion.php');
    header ('Content-Type: text/html; charset=utf-8')
?>
<html>
<body>
<section id="contenedorgeneral"> 
	<header>
        <meta http-equiv="Content-Type" content="text/html; charset=etf-8"/>
        <h1>Encuesta</h1>
        <h2>lol</h2>
        <link rel= "stylesheet" href="css/estilos3C.css">  	
	</header>
<nav>
	</nav>
    <section id="contenedor">  
		TABLA DE DATOS
    	<section id="principal">
			<table>
			<tr>
				<th scope="col">Nombre&nbsp;</th>
				<th scope="col">Apellido&nbsp;</th>
				<th scope="col">Puesto&nbsp;</th>
				<th scope="col">Departamento&nbsp;</th>
			</tr>
    <?php
    $eva = $_POST["depto"];
	$resultado = sqlsrv_query($conn,"SELECT Evaluador.Nombreev, Evaluador.Apellido_ev, Departamento.Nombred, Puesto.Nombrepu 
        FROM Evaluador INNER JOIN Puesto ON Evaluador.ID_puesto = Puesto.ID_puesto INNER JOIN Departamento ON Evaluador.ID_departamento = Departamento.ID_departamento
Where Departamento.ID_departamento = $eva"); 
   while($fila = sqlsrv_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$fila['Nombreev'] ."</td>" ;
        echo "<td>".$fila['Apellido_ev'] ."</td>" ;
        echo "<td>".$fila['Nombrepu'] ."</td>" ;
		echo "<td>".$fila['Nombred'] ."</td>" ;
		echo  "</tr>";
	}
    sqlsrv_close($conn);
    ?>  
    </table>
    
		</section>
	</section> 
    <footer>
    	SISTEMA OTSO
    </footer>
</section> 
</body>
</html>
<?php
	
?>