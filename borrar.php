<?php 
	include ("template/plantillas.php");
?>

	<div class="container">
    <div class="row">
	<form  action="borrar_db.php" method="GET" name="Borrar" class="app-abajo app-arriba app-formulario1" >
		<ul class="list-group ">
            <il class="list-group-item app-lista2">
                <h2 class="app-reporte">Borrar <span class="glyphicon glyphicon-remove"></span></h2>
            </il>
           	<il class="list-group-item"> <input type="number" class="app-input form-control" name="numero_memo" placeholder="Borrar"></il>  
            	<div class="row">
                    <div class="col-xs-12 col-sm-4"></div>
                	<div class="col-xs-12 col-sm-4 form-group">
                        <button onclick="alert('Procesando Retiro de memo')" class="btn btn-primary btn-block " >Borrar<span class='glyphicon glyphicon-remove'></span></button>
                    </div>
                    <div class="col-xs-12 col-sm-4"></div>
                </div>
            </il>
        </ul>
    </form>
</div>
</div>   
	
