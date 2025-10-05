<?php
function Sumar($Nro1, $Nro2) {
    $ResultadoSuma = $Nro1 + $Nro2;
    return $ResultadoSuma;
}

$Numero1=20;
$Numero2=50;
$Resultado = Sumar($Numero1 , $Numero2);

echo 'El resultado de sumar '.$Numero1.' y '.$Numero2.' es: '.$Resultado;

?>
