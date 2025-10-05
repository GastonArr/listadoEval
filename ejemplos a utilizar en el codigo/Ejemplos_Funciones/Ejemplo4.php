<?php
function Sumar($Nro1, $Nro2) {
    $ResultadoSuma = $Nro1 + $Nro2;
    return $ResultadoSuma;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf8">
        <title>Funciones</title>
    </head>
    <body>
        <h2>Funcion Suma</h2>
        <?php
        $Numero1 = 20;
        $Numero2 = 50;

        echo "El resultado de sumar $Numero1 mas $Numero2 es: "
        . '<strong>' . Sumar($Numero1, $Numero2) . '</strong>';
        ?>
        
        <br />
        El resultado de restar <?php echo $Numero1; ?> y <?php echo $Numero2; ?> 
        es <strong><?php echo Restar($Numero1, $Numero2); ?></strong>
    </body>
</html>

<?php 
function Restar($Nro1, $Nro2) {
    $ResultadoResta = $Nro1 - $Nro2;
    return $ResultadoResta;
}
?>