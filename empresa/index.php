<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Usuario</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.min.css">
    </head>
    <body>
         <!-- header-->     
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?view=1">nXSystems</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?view=1">Inicio <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empleados <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?view=2">Registrar</a></li>
            <li><a href="?view=3">Actualizar</a></li>
            <li><a href="?view=4">Buscar</a></li>
            <li class="divider"></li>
            <li><a href="?view=5">Departamentos</a></li>
            <li class="divider"></li>
            <li><a href="?view=6">Gerentes</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?view=7">Usuario</a></li>
      </ul>
    </div>
  </div>
</nav><!--end header-->
         
    <!--container-->
      <div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
        <h1>Bienvenido a mi Empresa!</h1>
        <p class="lead">Plantilla de ejemplo para clase de php</p>
        
        <p>
        
            <div class="panel panel-default" align="center">   
                <h3>Formulario usuario</h3>
                    <form method="post" action="usuariosdb.php?action=Insertar" enctype="multipart/form-data" >
                        <table class="table" align="center">
                            <tr><td>Nombre: </td><td><input class="form-control" type="text" name="nombre"  size="20" /></td></tr>
                        <tr><td>Email: </td><td><input class="form-control" type="text" name="apellido"  size="20" /></td></tr>
                        <tr><td>Password: </td><td><input class="form-control" type="number" name="cedula"  size="20" /></td></tr>
                        <tr><td>Fecha: </td><td><input class="form-control" type="date" name="nacimiento"  size="20" /></td></tr>
                        <tr><td>Sexo: </td><td>
                            <select class="form-control" name="status">
                             <option value="1" selected>Femenino</option>
                             <option value="2">Masculino</option>
                            </select>
                        </td></tr>
                        <tr><td colspan="2">
                            
                            <input class="btn btn-primary" type="submit" name="button_action" value="Registrar" />
                            
                            <input class="btn btn-primary" type="submit" name="button_action" value="Cancelar" />
                        </td></tr>
                    </table>
                <?php
                    $mensaje = 'hola, mundo';
                    echo "<p>$mensaje</p>";
                ?>
                    </form>
            </div> 
       

    <!--footer-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47456992-1', 'prinick.com');
  ga('send', 'pageview');

</script></p>
       <!--  DELETE / BORRAR botón de donar -->   
          
      </div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--end footer-->
    </body>
</html>
