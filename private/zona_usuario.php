<?php
//copio y pego la pagina de inicio completa
// pero la convierto en php para poder gestionar la zona
// de usuario

session_start();



?>



<!DOCTYPE html>
<html>
  <head>
    <title>ProYecto[FORO]</title>
    <meta charset="utf-8" />
    <!-- <link rel="stylesheet" type="text/css" href="maqueta/css/css_index.css"/> -->
    <link rel="stylesheet" type="text/css" href="../maqueta/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../maqueta/css/index_bootstrap.css">
    <script src="../maqueta/js/jquery-1.9.1.js"></script>
  </head>
<!-- head  -->
<!-- ####################################################### -->




<!-- ####################################################### -->
<!-- body  -->
  <body>

    <div id="page" class="container-fluid">

      <!-- ################## cabecera #################### -->
      <!-- ################################################ -->
      <div id="cabecera" class="row">
        <!-- ZONA LOGO -->
        <div class="col">
          <a href="private/mostrar.php" target="content">
            <button id="logo"><h3>FOROX</h3></button>
          </a>
        </div>

        <!-- ZONA MENUS?? -->
        <div class="col">
          <ol>
            <li>menu1</li>
            <li>menu2</li>
          </ol>
        </div>

        <!-- ZONA FILTRO/BUSQUEDA -->
        <div class="col-6">
          <form>
            <input type="text" name="" placeholder="Etiquetas"/>
            <input type="submit" name="" value="buscar" />
          </form>
        </div>

        <!-- ZONA LOGIN/REGISTRO -->
        <div class="col">
          <a href="zona de usuario aun por hacer :D" 
              target="content" 
              style="text-decoration:none">
            <button>
              <?php  echo "[".$_SESSION["nombre_usuario"]."]"; ?>
            </button>
          </a>         
          <a href="log_out.php" 
              style="text-decoration:none">
            <button>Log-out</button>
          </a>
        </div>
      </div>




      <!-- ################## cuerpo ###################### -->
      <!-- ################################################ -->
      <div id="cuerpo" class="container-fluid">
<!--         <div id="sidebar">
          <iframe name="nav" id="nav" src="maqueta/navegacion.html"></iframe>
        </div> -->
        <div id="contents" class="row">
          <iframe
            name="content"
            id="content"
            src="mostrar.php">
          </iframe>
        </div>
      </div>





      <!-- ################## pie ######################### -->
      <!-- ################################################ -->      
      <div id="pie" >
        pie
      </div>

    </div>  <!-- fin PAGE-->


    <script src="../maqueta/js/bootstrap.bundle.min.js">
      
    </script>
  </body>
</html>