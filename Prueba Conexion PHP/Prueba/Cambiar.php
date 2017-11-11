<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<section id="contenedorgeneral"> 
	<header>
        <h1>Cambiar preguntas</h1>	
        <link rel= "stylesheet" href="css/estilos3C.css">  
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
    $checar = $_POST["depto"];
	$resultado = sqlsrv_query($conn,"SELECT Cuestionario.ID_pregunta, TipoP.Nombrep, Departamento.Nombred, Cuestionario.Pregunta
    FROM Cuestionario INNER JOIN TipoP ON Cuestionario.ID_tipo = TipoP.ID_tipo INNER JOIN Departamento ON Cuestionario.ID_departamento = Departamento.ID_departamento
    Where Departamento.ID_departamento = $checar"); 
	while($fila = sqlsrv_fetch_array($resultado))
	{
		echo "<tr>";
		echo "<td>".$fila['ID_pregunta'] ."</td>" ;
        echo "<td>".$fila['Nombrep'] ."</td>" ;
        echo "<td>".$fila['Nombred'] ."</td>" ;
		echo "<td>".$fila['Pregunta'] ."</td>" ;
		echo  "</tr>";
	}
    ?>  
    </table>
        </section>
    </section> 
    </section> 
    <form action="Hecho.php" method="post">
No de pregunta <input type="int" name="preg"><br>
Nueva pregunta <input type="text" name="nupreg"><br>
Tipo de la nueva pregunta <input type="int" name="tipreg"><br>
<input type="submit">
</form>
  

</body>
</html>
<?php
	sqlsrv_close($conn);
?>