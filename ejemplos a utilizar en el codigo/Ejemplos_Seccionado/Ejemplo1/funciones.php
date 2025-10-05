<?php
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