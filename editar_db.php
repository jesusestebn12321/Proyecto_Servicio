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

	$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
	mysql_select_db("dace_db",$con);
	
if (isset($fecha_com) && !empty($fecha_com) &&
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
		
	mysql_query("UPDATE registro_memo SET fecha_com='$fecha_com', fecha_resep='$fecha_resep', hora='$hora', dependencia='$dependencia', descriccion='$descriccion', asunto='$asunto', recivido='$recivido', 
			entregado='$entregado', fecha_E='$fecha_E', hora_E='$hora_E', indice='$indice' WHERE numero_memo='$numero_memo'");	
	echo "<script>alert('editado exitosamente')</script>";			
	header("location:index.php");
}else{
	header("location:editar.php");
	echo "problemas al registrar datos";	 
	}
 ?>