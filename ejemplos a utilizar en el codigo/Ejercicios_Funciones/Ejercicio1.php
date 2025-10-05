<?php
$Fechas[0]['Cumple'] = "25/07/1987";  //ok
$Fechas[1]['Cumple'] = "31/02/2000";  //fecha incorrecta
$Fechas[2]['Cumple'] = "07/14/1990"; //fecha incorrecta
$Fechas[3]['Cumple'] = "31/09/1900"; //fecha incorrecta
$Fechas[4]['Cumple'] = "12/10/1980"; //ok   
$Fechas[5]['Cumple'] = "29/02/2014"; //fecha incorrecta
$Fechas[6]['Cumple'] = "12/32/2001"; //fecha incorrecta
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio2</title>
    </head>
    <body>
        <div>
            <h2>Ejercicio 2 con funciones</h2>
            <ul>
                <li>

                    Recorrer el array e ir informando si su fecha es correcta o no. 
                    Utilizar las funciones q brinda php para explotar la fecha y corroborar q una fecha sea correcta.
                </li>
                <li>
                    Las fechas estan en formato Español: dd/mm/yyyy
                </li>
            </ul>

            
            <pre>
                <?php print_r($Fechas); ?>
            </pre>

        </div>
    </body>
</html>
