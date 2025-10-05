<?php
// Sección del encabezado que construye la estructura base del dashboard.
// Aquí se integran los recursos CSS y se deja preparado el contenedor principal.
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Metadatos necesarios para asegurar la compatibilidad con navegadores modernos -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Listado de Viajes</title>
        <!-- Configuración responsive para que el diseño se adapte a distintos dispositivos -->
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
        <!-- Hojas de estilo provistas por el template -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
    </head>
    <body>
        <!-- Contenedor general del dashboard -->
        <div class="wrapper">
            <!-- Cabecera principal con logo y accesos -->
            <div class="main-header">
                <div class="logo-header">
                    <a href="index.html" class="logo">
                        Transportes del Centro
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
                </div>
                <!-- Barra superior con buscador y accesos adicionales -->
                <nav class="navbar navbar-header navbar-expand-lg">
                    <div class="container-fluid">
                        <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                            <div class="input-group">
                                <input type="text" placeholder="Buscar ..." class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-search search-icon"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                            <li class="nav-item dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-envelope"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Acción</a>
                                    <a class="dropdown-item" href="#">Otra acción</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Algo más aquí</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-bell"></i>
                                    <span class="notification">3</span>
                                </a>
                                <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown2">
                                    <li>
                                        <div class="dropdown-title">Tienes 3 notificaciones</div>
                                    </li>
                                    <li>
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">Nuevo usuario registrado</span>
                                                    <span class="time">Hace 5 minutos</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">Comentario en tablero</span>
                                                    <span class="time">Hace 12 minutos</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);"> <strong>Ver todas</strong> <i class="la la-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <img src="assets/img/bellota.jpg" alt="user-img" width="36" class="img-circle">
                                    <span>Admin</span>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li>
                                        <div class="user-box">
                                            <div class="u-img"><img src="assets/img/bellota.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Admin</h4>
                                                <p class="text-muted">admin@transportes.com</p>
                                                <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Perfil</a>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-user"></i> Mi Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Configuración</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Salir</a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
<?php
// El encabezado deja abierto el contenedor general para que otras secciones completen el diseño.
?>
