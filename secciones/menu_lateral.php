<?php
// Sección que dibuja el menú lateral de navegación del panel.
?>
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="assets/img/bellota.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        Admin
                        <span class="user-level">Supervisor</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse in" id="collapseExample" aria-expanded="true">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Editar Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Configuración</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a href="index.html">
                    <i class="la la-dashboard"></i>
                    <p>Inicio</p>
                </a>
            </li>
            <li class="nav-item active">
                <a href="listado.php">
                    <i class="la la-th"></i>
                    <p>Listado de viajes</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php
// El menú deja abierto el contenedor para que el panel principal pueda aparecer a la derecha.
?>
