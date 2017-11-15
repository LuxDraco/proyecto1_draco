<?php
    require_once('conexion.php');
   // $checar = $_POST["depto"];
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
        $prueba[] = array("ID"=> $id, "tipo"=> $tip, "departamento"=> $dep, "pregunta"=> $preg); 
   }
    sqlsrv_close($conn);
    $json_string = json_encode($prueba, JSON_UNESCAPED_UNICODE);
    echo $json_string;