<?php

/** ARRAY **/
$Personas = array();
$Personas[0]['Nombre'] = "Juan";
$Personas[0]['Apellido'] = "Gonzalez";
$Personas[0]['Antiguedad'] = 8; //en años
$Personas[0]['Sueldo'] = 1400000;
$Personas[0]['Horas_Extras'] = 5;
$Personas[0]['Valor_Hora_Extra'] = 15000;

$Personas[1]['Nombre'] = "Martin";
$Personas[1]['Apellido'] = "Juarez";
$Personas[1]['Antiguedad'] = 4; //en años
$Personas[1]['Sueldo'] = 1300000;
$Personas[1]['Horas_Extras'] = 8;
$Personas[1]['Valor_Hora_Extra'] = 10000;

$Personas[2]['Nombre'] = "Roberto";
$Personas[2]['Apellido'] = "Perez";
$Personas[2]['Antiguedad'] = 5; //en años
$Personas[2]['Sueldo'] = 1250000;
$Personas[2]['Horas_Extras'] = 4;
$Personas[2]['Valor_Hora_Extra'] = 12000;

$Personas[3]['Nombre'] = "Pablo";
$Personas[3]['Apellido'] = "Perez";
$Personas[3]['Antiguedad'] = 10; //en años
$Personas[3]['Sueldo'] = 1500000;
$Personas[3]['Horas_Extras'] = 2;
$Personas[3]['Valor_Hora_Extra'] = 15000;

$CantidadPersonas = count($Personas);
/****************************************/

/** FUNCIONES **/
function CalcularVacaciones($Antiguedad)
{
    $Dias = 0;
    if ($Antiguedad < 5) {
        //menos de 5 años
        $Dias = 14;
    } elseif ($Antiguedad >= 5 && $Antiguedad < 10) {
        //entre 5 y 9 años
        $Dias = 21;
    } else { // 10 años o mas
        $Dias = 30;
    }
    //devuelve el valor entero
    return $Dias;
}

function Calcular_Monto_HsExtra($ValorHoraExtra, $CantidadHorasExtra)
{
    $Monto_HsExtra = $ValorHoraExtra * $CantidadHorasExtra;
    return $Monto_HsExtra;
}

function Calcular_SueldoFinal($Sueldo, $Monto_HsExtra)
{
    return $Sueldo + $Monto_HsExtra;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Basic Tables - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="https://themewagon.com/themes/free-modular-bootstrap-4-admin-dashboard-template-vali/">Vali</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/team/jhon.png" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">John Doe</p>
                <p class="app-sidebar__user-designation">Backend Developer</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        </ul>
    </aside>
    <main class="app-content">

        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Ejemplo Tablas / Listados con arrays y Funciones</h1>
                <p>Basic bootstrap tables</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Miembros del equipo</h3>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th title="dato calculado">#</th>
                                <th title="dato">Apellido</th>
                                <th title="dato">Nombre</th>
                                <th title="dato">Antigüedad </th>
                                <th title="dato calculado" style='color: #009688'></i><strong>Vacaciones</strong></th>
                                <th title="dato">Sueldo</th>
                                <th title="dato">Hs Extra y Valor</th>
                                <th title="dato calculado" style='color: #009688'><strong>Monto a cobrar por Hs Extra</strong></th>
                                <th title="dato calculado" style='color: #009688'><strong>Sueldo Final</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < $CantidadPersonas; $i++) { ?>
                                <tr>
                                    <td><?php echo ($i + 1); //indica el nro de renglón  
                                        ?></td>
                                    <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                    <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                    <td><?php echo $Personas[$i]['Antiguedad']; ?> años </td>
                                    <td>
                                        <?php $DiasVacaciones = CalcularVacaciones($Personas[$i]['Antiguedad']); ?>
                                        Corresponden <strong><?php echo $DiasVacaciones; ?></strong> dias.
                                    </td>
                                    <td>$ <?php echo $Personas[$i]['Sueldo']; ?> </td>
                                    <td><?php echo $Personas[$i]['Horas_Extras']; ?> hs. <br />[c/u $ <?php echo $Personas[$i]['Valor_Hora_Extra']; ?> ]</td>
                                    <td>
                                        <strong>
                                            <?php $Monto_Cobrar_HsExtra = Calcular_Monto_HsExtra($Personas[$i]['Valor_Hora_Extra'], $Personas[$i]['Horas_Extras']); ?>
                                            $ <?php echo $Monto_Cobrar_HsExtra; ?>
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            $ <?php echo Calcular_SueldoFinal($Personas[$i]['Sueldo'], $Monto_Cobrar_HsExtra); ?>
                                        </strong>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="https://themewagon.com/themes/free-modular-bootstrap-4-admin-dashboard-template-vali/" target="_blank">Puedes descargar la plantilla original <b>Vali</b> desde aqui</a>
        |
        <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">o desde aqui</a>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

</body>

</html>