<?php 
/**
* 
*/
$obj=new Plantillas;
class Plantillas{
	 public function __construct(){
  ?>  
  <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>.:DACE:.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/ccs" href="view/sweetalert.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <header class="app-header">
        <div>
          <nav>
            <ul>
              <li><a href="index.php"  ><span  class="primero">Agregar<p class="glyphicon glyphicon-book"></p></span>Agregar</a></li>
              <li><a href="editar.php" ><span  class="segundo">Editar <p class="glyphicon glyphicon-edit"></p></span>Editar</a></li>
              <li><a href="buscar.php" ><span class="tercero" >Buscar <p class="glyphicon glyphicon-zoom-in"></p></span>Buscar</a></li>
              <li><a href="borrar.php" ><span class="cuarto"  >Borrar <p class="glyphicon glyphicon-remove"></p></span>Borrar</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <section class="app-section_contenido">

<?php 
   }
   


   public function __destruct(){
?>
  </section>
  <footer class="app-footer">
          <div class="app-empresa"> 
            <h4>.::Dace::.</h4>
            <p class="app-descripcion2">  <span class="app-resaltar">Jesus Villalta </span></p>
          </div>
          <a href="#"><img src="img/png/facebook-logo.png" class="app-icon1"></a>
          <a href="#"><img src="img/png/instagram-symbol.png" class=" app-icon1"></a>
          <a href="#"><img src="img/png/twitter-black-shape.png") class=" app-icon1"></a>  
    </footer>
  

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

<?php 
   }
	 
}
?>