<?php 
include 'template/plantillas.php';
 ?>  
<section >           
  <div class="container">
    <div class="row">
      <div class="col-xs-2"></div>
      <div class="col-xs-8 app-arriba">   
        <form class="app-abajo" action="add.php" name="registro" method="POST">
          <ul class="list-group">
            <li class="list-group-item app-lista"> 
              <h2 class="app-reporte">Registrar <span class="glyphicon glyphicon-book"></span></h2>
            </li>                     
                    <!-- numero de memo -->               
            <li class="list-group-item">
                      <h3 class="app-resaltar1 ">Numero de memo:</h3>
                      <p class="app-separador"></p>    
                      <input type="number" min="1" name="numero_memo" placeholder="N° de memo" class="app-input form-control">
            </li>                  
             <!-- fecha de comunicado -->                   
            <li class="list-group-item">
                      <h3 class="app-resaltar1">Fecha de comunicado:</h3>
                      <p class="app-separador1"></p>
                      <input type="date" name="fecha_com" placeholder="Fecha de comunicacion" class="app-input form-control">
            </li>        
            <!-- fecha de recepcion-->                         
            <li class="list-group-item">
                      <h3 class="app-resaltar1">Fecha de recepcion:</h3>
                      <p class="app-separador2"></p> 
                      <input type="date" name="fecha_resep" placeholder="Fecha de Recepcion" class="app-input form-control">
            </li>
            <!-- hora -->            
            <li class="list-group-item">
                      <h3 class="app-resaltar1">Hora:</h3>
                      <p class="app-separador3"></p>
                      <input type="time" min="1" max="2459" name="hora" placeholder="Ejemplo: 19:23" class="app-input form-control">
            </li>
             <!--tabla dependencia -->
            <li class="list-group-item">
                      <ul class="list-group app-listaDe">
                        <li class="list-group-item app-lista1">
                          <h3 class="app-resaltar2">Dependencia:</h3>
                          <p class="app-separador4"></p>
                        </li>
                        <div class="group list-group ">
                          <table class="table">
                            <tbody>
                              <tr>        
                                <td>
                                  <input  type="radio" name="RBDecanato" value="secretaria">
                                </td>
                                <td>
                                  <p>Secretaria</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input  type="radio"  name="RBDecanato" value="decanato de area">
                                </td>
                                <td>
                                  <p>Decanato de area</p>                                           
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input  type="radio" name="RBDecanato" value="decanato de posgrado">
                                </td>
                                <td>
                                  <p>Decanato de posgrado</p> 
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input  type="radio" name="RBDecanato" value="direccion de grado">
                                </td>
                                <td>
                                  <p>Direccion de grado</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input  type="radio" name="RBDecanato" value="consejo universitario">
                                </td>
                                <td>
                                  <p>Consejo universitario</p>
                                </td>
                              </tr>                                      
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="consejo de area">
                                </td>
                                <td>
                                  <p>Consejo de area</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="vicerectorado academico">
                                </td>
                                <td>
                                  <p>Vicerectorado academico</p>
                                </td>
                              </tr>
                              <tr> 
                                <td>
                                   <input type="radio" name="RBDecanato" value="vicetecrotado administrativo">
                                </td>
                                <td>
                                  <p>Vicerectorado administrativo</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="coordinacion de oficina sectorial">
                                </td>
                                <td>
                                  <p>Coordinacion de oficina sectorial</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="radio"  name="RBDecanato" value="Comicion de traslado, equivalencia, revalidas, cambios deprogramas">
                                </td>
                                <td>
                                  <p>Comicion de traslado, equivalencia, revalidas, cambios deprogramas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Direccion de compras">
                                </td>
                                <td>
                                  <p>Direccion de compras</p>
                                </td>
                              </tr> 
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Direccion de servicions generales">
                                </td>
                                <td>
                                  <p>Direccion de servicions generales</p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Direccion de recursos humanos">
                                </td>
                                <td>
                                  <p>Direccion de recursos humanos</p>
                                </td>
                              </tr>       
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Seleccion de bienes">
                                </td>
                                <td>
                                  <p>Seleccion de bienes</p>
                                </td>
                              </tr>       
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Particulares">
                                </td>
                                <td>
                                  <p>Particulares</p>
                                </td>
                              </tr>      
                              <tr>
                                <td>
                                  <input type="radio" name="RBDecanato" value="Otros">
                                </td>
                                <td>
                                  <p>Otros</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </ul>
            </li>
            <!-- descriccion -->
            <li class="list-group-item">
                      <p class="app-parrafo">Si proviene de un decanato, una direccion de programa, un consejo de area o una coordinacion de oficina sectorial especifique, en otro caso coloque <span class="app-resaltar3">"No aplica"</span>.</p><br>
                      <input class=" app-input from-control" type="text" name="descriccion" placeholder="Descriccion">
            </li>  
            <!-- asunto -->
            <li class="list-group-item">
                      <h3 class="app-resaltar">Asunto y breve descripcion del oficio:</h3>
                      <p class="app-separador5"></p>
                      <input type="text" name="asunto" placeholder="Tu respuesta" class="app-input form-control">
            </li>        
            <!-- recivido -->
            <li class="list-group-item">
                              <ul class="list-group app-listaDe">
                                <li class="list-group-item app-lista1">
                                  <h3 class="app-resaltar2">Recivido por:</h3>
                                  <p class="app-separador4"></p>
                                </li>
                                <li class="list-group-item">
                                  
                                  <input type="radio" name="recivido" value="Yubire Camacho">Yubire Camacho<br>  
                                  
                                  <input type="radio" name="recivido" value="Mariagnis Toledo">Mariagnis Toledo<br>
                                 
                                  <input type="radio" name="recivido" value="Sandra Pereira">Sandra Pereira<br>  
                                  
                                  <input type="radio" name="recivido" value="Eduardo Vargas">Eduardo Vargas<br>  
                                 
                                  <input type="radio" name="recivido" value="Otro">Otro
            
                                </li>
                              </ul>
            </li> 
            <!-- Entregado a -->
            <li class="list-group-item">
                              
                              <h3 class="app-resaltar2">Entregado a:</h3>
                              <p class="app-separador9"></p>
                              <input type="text" name="entregado" class="app-input form-control"  placeholder="Ejemplo: Esteban Villalta"><br>     
            </li>     
            <!-- fecha de entrega -->
            <li class="list-group-item">
                              
                              <h3 class="app-resaltar2">Fecha de entrega:</h3>
                              <p class="app-separador7"></p>
                              <input type="date" name="fecha_E" class="app-input form-control" placeholder="Fecha de Entrega"><br>      
            </li>
                    <!-- hora de entrega -->
            <li class="list-group-item">
                             
                              <h3 class="app-resaltar2">Hora de entrega:</h3>
                              <p class="app-separador8"></p>
                              <input type="time" class="app-input form-control" name="hora_E" min="1" max="2459" placeholder="Ejemplo: 16:32">                    
            </li>                           
                    <!-- indice de archivo -->
            <li class="list-group-item">
                              
                              <h3 class="app-resaltar2">Indice de Archivo:</h3>
                              <p class="app-separador7"></p>
                              <input type="number" class="app-input form-control" placeholder="Indice de archivo" name="indice" min="1">
            </li>                             
                    <!-- boton --> 
            <li class="list-group-item">
                              <div class="row">
                                <div class="col-xs-12 col-sm-4"></div>
                                <div class="col-xs-12 col-sm-4 form-group">
                                  <button class="btn btn-primary app-btn1 btn-block" onclick="alert('Procesando datos...')"><span class="glyphicon glyphicon-log-in "  "></span> Registrar</button>
                                </div>
                                <div class="col-xs-12 col-sm-4"></div>
                              </div>
            </li>
          </ul>
        </form>
      </div>
      <div class="col-xs-2"></div>
    </div>
  </div>
</section>
   