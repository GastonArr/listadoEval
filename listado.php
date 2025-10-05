<?php
// Archivo principal del listado dinámico de viajes.
// En esta sección se ensamblan los componentes y se procesan los datos para mostrarlos en pantalla.

// Incluir las funciones esenciales; si el archivo no existe se detiene la ejecución para evitar errores.
require_once __DIR__ . '/secciones/funciones.php';

// Incluir el array de datos; utilizamos require_once para garantizar que el script no continúe sin la información.
require_once __DIR__ . '/secciones/datos.php';

// Cálculo inicial de la cantidad de viajes para mostrar en el título descriptivo.
$cantidadViajes = count($viajes);

// Variables acumuladoras que se irán completando durante el recorrido del array.
$sumatoriaFinalizados = 0;
$contadorMenores300 = 0;
$sumaTotalViajes = 0;

// Incluir el encabezado visual. En caso de faltar el archivo, solo se generará un aviso pero la ejecución continúa.
include_once __DIR__ . '/secciones/encabezado.php';

// Incluir el menú lateral con navegación. También se utiliza include_once para manejar posibles advertencias sin detener todo.
include_once __DIR__ . '/secciones/menu_lateral.php';
?>
        <!-- Panel principal donde se ubica el contenido dinámico -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <!-- Título del listado -->
                    <h4 class="page-title">Listado de Viajes</h4>
                    <!-- Descripción con la cantidad total de registros mostrados -->
                    <p class="card-category">Se visualizan <?php echo $cantidadViajes; ?> viajes registrados.</p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Tabla que se completa recorriendo el array de viajes -->
                                    <table class="table table-head-bg-success table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Fecha Viaje</th>
                                                <th scope="col">Chofer</th>
                                                <th scope="col">Destino</th>
                                                <th scope="col">Precio Base</th>
                                                <th scope="col">Peso (Tonelada)</th>
                                                <th scope="col">Costo Peajes</th>
                                                <th scope="col">Total viaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viajes as $indice => $viaje): ?>
                                                <?php
                                                // Formatear la fecha para mostrarla en formato español.
                                                $fechaFormateada = formatearFecha($viaje['fecha']);
                                                // Determinar la clase de color según el estado del viaje.
                                                $claseEstado = obtenerClaseEstado($viaje['estado']);
                                                // Unir apellido y nombre respetando el formato solicitado.
                                                $nombreChofer = $viaje['chofer']['apellido'] . ', ' . $viaje['chofer']['nombre'];
                                                // Calcular las toneladas correspondientes al peso registrado en kilogramos.
                                                $toneladas = calcularToneladas($viaje['peso_kg']);
                                                // Definir el porcentaje de ocupación para la barra de progreso.
                                                $porcentajeOcupacion = calcularPorcentajeOcupacion($toneladas);
                                                // Establecer la clase visual de la barra según las toneladas transportadas.
                                                $clasePeso = obtenerClasePeso($toneladas);
                                                // Calcular el costo de los peajes utilizando la función propia.
                                                $costoPeajes = calcularCostoPeajes($viaje['peajes']);
                                                // Determinar el total del viaje sumando precio base y peajes.
                                                $totalViaje = calcularTotalViaje($viaje['precio_base'], $costoPeajes);

                                                // Actualizar la sumatoria de viajes finalizados si corresponde.
                                                if (strtolower($viaje['estado']) === 'finalizado') {
                                                    $sumatoriaFinalizados += $totalViaje;
                                                }

                                                // Incrementar el contador de viajes con total menor a $300.000.
                                                if ($totalViaje < 300000) {
                                                    $contadorMenores300++;
                                                }

                                                // Acumular el total general de todos los viajes.
                                                $sumaTotalViajes += $totalViaje;
                                                ?>
                                                <tr>
                                                    <!-- Número de fila -->
                                                    <td><?php echo $indice + 1; ?></td>
                                                    <td>
                                                        <!-- Fecha con el color correspondiente según el estado -->
                                                        <p class="text-<?php echo $claseEstado; ?>">
                                                            <?php echo $fechaFormateada; ?>
                                                        </p>
                                                        <!-- Etiqueta oculta para recordar el estado dentro de la tabla -->
                                                        <small class="text-muted">Estado: <?php echo $viaje['estado']; ?></small>
                                                    </td>
                                                    <!-- Nombre completo del chofer -->
                                                    <td><?php echo $nombreChofer; ?></td>
                                                    <!-- Destino del viaje -->
                                                    <td><?php echo $viaje['destino']; ?></td>
                                                    <!-- Precio base con formato monetario -->
                                                    <td><?php echo formatearMoneda($viaje['precio_base']); ?></td>
                                                    <td title="<?php echo number_format($viaje['peso_kg'], 0, ',', '.'); ?> Kgs.">
                                                        <!-- Peso en toneladas con el formato definido -->
                                                        <?php echo formatearToneladas($toneladas); ?> Tn.
                                                        <br />
                                                        <!-- Barra de progreso que refleja la ocupación -->
                                                        <div class="progress">
                                                            <div class="progress-bar bg-<?php echo $clasePeso; ?>" role="progressbar"
                                                                style="width: <?php echo $porcentajeOcupacion; ?>%"
                                                                aria-valuenow="<?php echo $porcentajeOcupacion; ?>"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <!-- Costo de peajes con detalle en el título -->
                                                    <td title="<?php echo $viaje['peajes']; ?> peajes a <?php echo formatearMoneda(COSTO_PEAJE); ?> cada uno">
                                                        <?php echo formatearMoneda($costoPeajes); ?></td>
                                                    <!-- Total calculado del viaje -->
                                                    <td><?php echo formatearMoneda($totalViaje); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <!-- Sumatoria de montos finalizados -->
                                                <p class="card-category">Monto Finalizados</p>
                                                <h4 class="card-title"><?php echo formatearMoneda($sumatoriaFinalizados); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-stats card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-newspaper-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <!-- Cantidad de viajes con total inferior a $300.000 -->
                                                <p class="card-category">Menores a $300 mil</p>
                                                <h4 class="card-title"><?php echo $contadorMenores300; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-stats card-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <!-- Sumatoria total de todos los viajes -->
                                                <p class="card-category">Total costo </p>
                                                <h4 class="card-title"> <?php echo formatearMoneda($sumaTotalViajes); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php
// Incluir el pie del documento para cerrar la estructura HTML.
include_once __DIR__ . '/secciones/pie.php';
?>
