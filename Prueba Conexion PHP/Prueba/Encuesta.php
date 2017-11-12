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
        <h2>¿porqué me odiü la vida?</h2>
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
    //$checar = $_POST["depto"];
	$resultado = sqlsrv_query($conn,"SELECT Cuestionario.ID_pregunta, TipoP.Nombrep, Departamento.Nombred, Cuestionario.Pregunta
    FROM Cuestionario INNER JOIN TipoP ON Cuestionario.ID_tipo = TipoP.ID_tipo INNER JOIN Departamento ON Cuestionario.ID_departamento = Departamento.ID_departamento
    Where Departamento.ID_departamento = 2"); 
    $prueba = array();
    while($fila = sqlsrv_fetch_array($resultado))
	{
        $questionEn = utf8_encode($fila['Pregunta']);
        $id=$fila['ID_pregunta'];
        $tip=$fila['Nombrep'];
        $dep=$fila['Nombred'];
        $preg=$questionEn;
        $prueba[] = array('ID'=> $id, 'tipo'=> $tip, 'departamento'=> $dep, 'pregunta'=> $preg); 
   }
    sqlsrv_close($conn);
    print_r($prueba);
     $json_string = json_encode($prueba, JSON_UNESCAPED_UNICODE);
      file_put_contents('myfile.json', $json_string);
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