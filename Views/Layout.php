<?php
include_once '../Controllers/AccesoController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Configuración</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Css/Header.css">
  <link rel="stylesheet" type="text/css" href="Css/Footer.css">
</head>

<body>

<?php
if(session_status() == PHP_SESSION_NONE)
{
  session_start();
} 

function MostrarNavbar()
{
  if($_SESSION["Correo"] == null)
  {
    header("Location: ../Views/Login-Registro.php");
  }
echo '
  <header class="header1">
    <img class="logo" src="Img\Primerainfanciacr-isologo-vertical-05-70-e1607987714656.png">
    <nav>
      <ul class="nav_links">
        <li><a class="link" href="#"> Inicio </a></li>
        <li><a class="link" href="#"> Tienda </a></li>
        <li><a class="link" href="#"> Banco de Recursos </a></li>
        <li><a class="link" href="./actualizarUsuario.php"> Mi Perfil </a></li>
      </ul>
    </nav>
    <form action="" method="post">
      <a class="nav_a_button">
        <input type="submit" class="btn btn-primary btn-block" id="btnCerrarSesion" name="btnCerrarSesion" value="Cerrar Sesion"/>
      </a>
    </form>

  </header>
';
}

function MostrarFooter()
{
echo '
  <footer class="footer">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Sobre Nosotros</h4>
            <ul>
              <li><a href="#">Acerca de Primera Infancia</a></li>
              <li><a href="#">Términos y condiciones</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contáctanos</h4>
            <ul>
              <li><a class="a_contacto" href="#"> +506 8672 7296 </a></li>
              <li><a class="a_contacto" href="#"> adrianart@primerainfancia.cr </a></li>
              <li><a class="a_contacto" href="#"> soporte@primerainfancia.cr</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Enlaces rápidos</h4>
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Tienda</a></li>
              <li><a href="#">Banco de Recursos</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Síguenos en redes sociales</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <footer class="footer_abajo">
    <p>&COPY 2023  Primera Infancia. Todos los derechos reservados. </p>
  </footer>
';
}

function MostrarMenuPerfil()
{
echo '

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Tipo Usuario</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Nombre del usuario</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>Consultas</p>
            </a>
          </li>     
        </ul>
      </nav>
    </div>
  </aside>
';
}

?>

<body>
  <html>
