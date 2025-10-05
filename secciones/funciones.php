<?php
// Archivo de funciones específicas del listado de viajes.
// Cada función encapsula una porción de lógica para reutilizar el código y mantenerlo ordenado.

// Defino una constante para guardar el costo fijo de cada peaje.
// Al ser constante, si mañana cambia el valor solo modificamos este número.
define('COSTO_PEAJE', 1500);

// Función que recibe una fecha en formato AAAA-MM-DD y la devuelve como DD/MM/AAAA.
function formatearFecha($fechaISO) {
    // Con strtotime convierto la fecha a un timestamp y luego uso date para formatearla.
    $marcaDeTiempo = strtotime($fechaISO);
    return date('d/m/Y', $marcaDeTiempo);
}

// Función que se apoya en el estado del viaje para devolver la clase de color correspondiente.
function obtenerClaseEstado($estado) {
    // Paso el texto a minúsculas para evitar problemas si el dato llega con otra combinación.
    $estadoMinuscula = strtolower($estado);

    // Según el estado, retorno el nombre de la clase utilizada en el template.
    if ($estadoMinuscula == 'finalizado') {
        return 'success';
    } elseif ($estadoMinuscula == 'en camino') {
        return 'warning';
    } else {
        return 'danger';
    }
}

// Función que transforma el peso expresado en kilogramos a toneladas.
function calcularToneladas($pesoKilogramos) {
    // Divido el valor en kilos por 1000 según la consigna para obtener toneladas.
    return $pesoKilogramos / 1000;
}

// Función para dejar el texto de las toneladas con dos decimales separados por coma.
function formatearToneladas($toneladas) {
    // number_format permite definir la cantidad de decimales y los separadores pedidos.
    return number_format($toneladas, 2, ',', '.');
}

// Función que calcula el porcentaje que ocupa la barra de progreso.
function calcularPorcentajeOcupacion($toneladas) {
    // La capacidad máxima indicada es de 2 toneladas, equivalente al 100%.
    $porcentaje = ($toneladas / 2) * 100;

    // No permito que el porcentaje supere el 100% para evitar que la barra desborde el diseño.
    if ($porcentaje > 100) {
        $porcentaje = 100;
    }

    return $porcentaje;
}

// Función que define el color de la barra según el peso transportado.
function obtenerClasePeso($toneladas) {
    if ($toneladas < 1) {
        return 'success';
    } elseif ($toneladas < 1.5) {
        return 'warning';
    } else {
        return 'danger';
    }
}

// Función que calcula el costo total de los peajes de cada viaje.
function calcularCostoPeajes($cantidadPeajes) {
    // Multiplico la cantidad indicada por el costo fijo almacenado en la constante.
    return $cantidadPeajes * COSTO_PEAJE;
}

// Función que devuelve el total del viaje sumando el precio base y lo abonado en peajes.
function calcularTotalViaje($precioBase, $costoPeajes) {
    return $precioBase + $costoPeajes;
}

// Función para mostrar valores monetarios con el formato utilizado en Argentina.
function formatearMoneda($monto) {
    return '$ ' . number_format($monto, 0, ',', '.');
}
?>
