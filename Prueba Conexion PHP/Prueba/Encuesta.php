<?php 
	require_once('conexion.php'); 
?>
<html>
<body>
<section id="contenedorgeneral"> 
	<header>
        <h1>Encuesta</h1>
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
    $prueba = array();
    while($fila = sqlsrv_fetch_array($resultado))
	{
        $id=$fila['ID_pregunta'];
        $tip=$fila['Nombrep'];
        $dep=$fila['Nombred'];
        $preg=$fila['Pregunta'];

        $prueba[] = array('ID'=> $id, 'tipo'=> $tip, 'departamento'=> $dep, 'Pregunta'=> $preg);
   }
    sqlsrv_close($conn);

    $json_string = json_encode($prueba);
    echo $json_string;
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