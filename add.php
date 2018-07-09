<?php 
	$numero_memo=$_POST['numero_memo'];
	$fecha_com=$_POST['fecha_com'];
	$fecha_resep=$_POST['fecha_resep'];
	$hora=$_POST['hora'];
	$dependencia=$_POST['RBDecanato'];
	$descriccion=$_POST['descriccion'];
	$asunto=$_POST['asunto'];
	$recivido=$_POST['recivido'];
	$entregado=$_POST['entregado'];
	$fecha_E=$_POST['fecha_E'];
	$hora_E=$_POST['hora_E'];
	$indice=$_POST['indice'];
if (isset($numero_memo) && !empty($numero_memo) &&
	isset($fecha_com) && !empty($fecha_com) &&
	isset($fecha_resep) && !empty($fecha_resep) &&
	isset($hora) && !empty($hora) && 
	isset($dependencia) && !empty($dependencia) && 
	isset($descriccion) && !empty($descriccion) && 
	isset($asunto) && !empty($asunto) &&
	isset($recivido) && !empty($recivido) &&
	isset($entregado)&& !empty($entregado) &&
	isset($fecha_E)&& !empty($fecha_E) &&
	isset($hora_E)&& !empty($hora_E) &&
	isset($indice)&& !empty($indice)){
		
		$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
		mysql_select_db("dace_db",$con) or die ("problemas al conectar con la base de datos");
		mysql_query("INSERT INTO registro_memo
			(numero_memo,fecha_com,fecha_resep,hora,dependencia,descriccion,asunto,
			recivido,entregado,fecha_E,hora_E,indice) 
				VALUES 
			('$numero_memo','$fecha_com','$fecha_resep','$hora','$dependencia','$descriccion',
			'$asunto','$recivido','$entregado','$fecha_E','$hora_E','$indice')",$con);
			header("location:index.php");
	}else{
		header("location:index.php");
	}
 ?>