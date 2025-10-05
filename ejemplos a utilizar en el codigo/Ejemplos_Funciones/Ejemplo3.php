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
        <h2>Funcion Sumar</h2>
        <?php
        //1era parte: asigno variables numericas, para ser enviadas como parámetros
        $Numero1 = 20;
        $Numero2 = 50;
        ?>
        El resultado de sumar <?php echo $Numero1; ?> mas <?php echo $Numero2; ?> es: 
        <strong><?php echo Sumar($Numero1, $Numero2); ?></strong>
        <hr />

        <?php
        //2da parte: asigno nuevas variables numericas, para ser enviadas como parámetros
        $Numero3 = 100;
        $Numero4 = 500;
        ?>
        El resultado de sumar <?php echo $Numero3; ?> mas <?php echo $Numero4; ?> es: 
        <strong><?php echo Sumar($Numero3, $Numero4); ?></strong>
        <hr />

        <?php
        //3era parte: asigno nuevas variables numericas, para tomar los resultados y luego tambien sumarlos
        $Resultado1= Sumar($Numero1, $Numero2);
        $Resultado2 = Sumar($Numero3, $Numero4);
        ?>
        La suma de ambos resultados (<?php echo $Resultado1; ?> mas <?php echo $Resultado2; ?>) es: 
        <strong><?php echo Sumar($Resultado1, $Resultado2); ?></strong>
        <hr />
    </body>
</html>

