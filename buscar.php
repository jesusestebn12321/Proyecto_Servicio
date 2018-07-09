<?php 
	include ("template/plantillas.php");	
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(0);	
?>
<div class="container">
    <div class="row">
		<form  action="#" method="GET" name="Buscar" class=" app-arriba app-formulario1" >
			<ul class="list-group ">
	            <il class="list-group-item app-lista2">
	                <h2 class="app-reporte">Buscar <span class="glyphicon glyphicon-zoom-in"></span></h2>
	            </il>
	           	<il class="list-group-item"> <input type="number" class="app-input form-control" name="numero_memo" placeholder="Buscar"></il>  
	            	<div class="row">
	                    <div class="col-xs-12 col-sm-4"></div>
	                	<div class="col-xs-12 col-sm-4 form-group">
	                        <button onclick="alert('Procesando Busqueda')" class="btn btn-primary btn-block " >Buscar<span class='glyphicon glyphicon-zoom-in'></span></button>
	                    </div>
	                    <div class="col-xs-12 col-sm-4"></div>
	                </div>
	            </il>
	        </ul>
	    </form>
	</div>
</div>
	<?php 
		$numero_memo=$_GET['numero_memo'];
		if (isset($numero_memo) && !empty($numero_memo)) {
			$con=mysql_connect("localhost","root","") ;
			mysql_select_db("dace_db",$con) or die ("Problemas al conectar con la base de datos".mysql_error());
			$regi=mysql_query("SELECT * FROM registro_memo WHERE numero_memo='$numero_memo'", $con) or die ("Error En:" .mysql_error());
            $reg=mysql_fetch_array($regi);
            echo '
 			<div class="row app-centrar1">             
                <div class="col-xs-12 col-sm-6"> 
                    <ul class="list-group">
                      <il class="list-group-item app-lista  app-titulo2">
                      <h2 class="app-reporte">Memo</h2>
                      </il>  
                      <il class="list-group-item">
						<table class="table">
	                    		<tbody>
	                    	<tr>        
	                            <td><h3>Numero de Memo:</h3></td>
	                            <td>'.$reg["numero_memo"].' </td>
	                        </tr>
	                        <tr>
	                            <td><h3>Fecha de Comunicado:</h3></td>
	                            <td>'.$reg["fecha_com"].' </td>
	                        </tr>
	                        <tr>
	                            <td><h3>Fecha de Resepcion:</h3></td>
	                            <td>',$reg["fecha_resep"],' </td>
	                        </tr>
	                        <tr>
	                            <td><h3>Hora:</h3></td>
	                            <td>',$reg["dependencia"],' </td>
	                        </tr>
	                        <tr>
	                        	<td><h3>Dependencia:</h3></td>
	                            <td>',$reg["descriccion"],' </td>
	                        </tr>                                      
	                        <tr>
	                            <td><h3>Descriccion:</h3></td>
	                            <td>',$reg["asunto"],' </td>
	                        </tr>
	                        <tr>
	                            <td><h3>Asunto:</h3></td>
	                            <td>',$reg["recivido"],' </td>
	                        </tr>
	                        <tr> 
	                        	<td><h3>Recivido Por:</h3></td>
	                            <td>',$reg["entregado"],' </td>
	                        </tr>
	                        <tr> 
	                            <td><h3>Entregado a:</h3></td>
	                            <td>',$reg["entregado"],' </td>
	                        </tr>
	                        <tr> 
	                            <td><h3>Fecha de Entrega:</h3></td>
	                            <td>',$reg["fecha_E"],' </td>
	                        </tr>
	                        <tr> 
	                            <td><h3>Hora de Entrega:</h3></td>
	                            <td>',$reg["hora_E"],' </td>
	                        </tr>
	                        <tr> 
	                            <td><h3>Indice de Archivo:</h3></td>
	                            <td>',$reg["indice"],' </td>
	                        </tr>
	                    		</tbody>
	                	</table>
                      </il>
                      </ul>
                </div>
              </div>';
		}
	?>
                    