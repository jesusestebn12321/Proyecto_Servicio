<?php 
$numero_memo=$_GET['numero_memo'];
$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor".mysql_error());
	mysql_select_db("dace_db",$con) or die ("problemas al conectar con la base de datos".mysql_error());
	$delete=mysql_query("SELECT numero_memo FROM registro_memo WHERE numero_memo='$numero_memo'",$con ) or die ("Error En:" .mysql_error());
	
	if ($delete1=mysql_fetch_array($delete)) {
		mysql_query("DELETE FROM registro_memo WHERE numero_memo='$numero_memo'",$con) or die ("Error En:" .mysql_error());
		echo "Registro exitoso";
		header("location:index.php");
	}
	else{
	header("location:index.php");
		echo "Registro no exitoso";
		
	}
 ?>