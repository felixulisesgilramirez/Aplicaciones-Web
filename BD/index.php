<?php  
include '../BD/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esta es una pagina web</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/styleFUGR.css">
    <link rel="#" href="Basededatos">
    <script src="https://kit.fontawesome.com/3952530bcb.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- NavBar content -->
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-link" href="nav.php"></div>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="dropdown nav-item">
          <a class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="Usuarios.html">usuario </a>
          <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">nuevo usuario</a></li>
            <li><a href="#" class="dropdown-item">ver usuario</a></li>
            <li><a href="Usuarios.html" class="dropdown-item"> detalles de usuario</a></li>
          </ul>
        </li>
        <li class="dropdown nav-item">
          <a class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="reservaciones.html">Reservaciones</a>
        <ul class="dropdown-menu">
          <li><a href="#" class="dropdown-item">nueva reservacion</a></li>
            <li><a href="#" class="dropdown-item">ver reservacion</a></li>
            <li><a href="Reservaciones.html" class="dropdown-item">detalles de reservacion</a></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Registroperro.html">Registro Perros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <form action='../BD/usuarios.php' method='POST'>
      <div class="form-group">
        <h1 class="text-center"> formulario usuario</h1>
         <div class="row">
          <div class="col-md-2 col-lg-2">
            <p>nombres: <input type="text" class="form-control" name="nombres" size="30"></p>
          </div>
          <div class="col-md-2 col-lg-2">
            <p>apellidos: <input type="text" class="form-control" name="apellidos" size="40"></p>
          </div>
          <div class="col-md-2 col-lg-2">
            <p>correo: <input type="email" class="form-control" name="correo" size="40"></p>
          </div>
          <div class="col">
            <p>domicilio: <input type="add" class="form-control" name="domicilio" size="30"></p>
          </div>
          <div class="col">
            <p>teléfono: <input type="tel" class="form-control" name="telefono"></p>
          </div>
          <div class="col">
            <p>edad: <input type="age" class="form-control" name="edad"></p>
                
          
          </div>
            <p>
              <input type="submit" value="Enviar">
              <input type="reset" value="Borrar">
            </p>
          </form>
          </div>
          <!-- footer -->
  <footer class="page-footer font-small blue fixed-bottom">
    <i class="fab fa-whatsapp"></i>
    <i class="fab fa-facebook" _mstvisible="2"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-tiktok"></i>
          <div style="background-color: #21d192;">
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
               <a href="https://mdbootstrap.com/"> Mi primera pagina web</a>
          </div>
          </div>
  </footer>
  
    
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>