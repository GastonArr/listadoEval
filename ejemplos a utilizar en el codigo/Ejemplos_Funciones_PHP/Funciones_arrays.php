<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html">
    </head>
    <body>
        <div>
            <h2>Funciones de Arrays con PHP:</h2>

            <h3>print_r($array)</h3>
            <h5>muestra el contenido de un array</h5>
            <a href="http://php.net/manual/es/function.print-r.php">Ver print_r </a><br />
            <?php
            //dado un array simple 
            $Colores = array('negro', 'blanco', 'rojo', 'verde', 'azul');
            //muestro su contenido simplemente:
            print_r($Colores);
            echo '<br /><br /> Para verlo mejor:<br />';
            //puedo mostrar su contenido con un mejor formato:
            echo '<pre>';
            print_r($Colores);
            echo '</pre>';
            ?>
            <hr />

            <?php
            //dado un array multidimensional
            $Personas[0]['Nombre'] = "Juan";
            $Personas[0]['Apellido'] = "Gonzalez";
            $Personas[0]['Monto_Hora'] = 130;
            $Personas[0]['Horas_Trabajadas'] = 4;
            $Personas[0]['Total_Ventas'] = 3200;

            $Personas[1]['Nombre'] = "Martin";
            $Personas[1]['Apellido'] = "Juarez";
            $Personas[1]['Monto_Hora'] = 110;
            $Personas[1]['Horas_Trabajadas'] = 6;
            $Personas[1]['Total_Ventas'] = 3800;

            echo '<pre>';
            print_r($Personas);
            echo '</pre>';
            ?>
            <hr />

            <h3>implode() o join()</h3>
            <h5>Une mediante un "pegamento" los elementos de un array</h5>
            <a href="http://www.php.net/manual/es/function.implode.php">Ver implode </a><br />
            <?php
            /* union de elementos de un array */
            //$Colores_Unidos_Por_Coma = implode(",", $Colores);
            $Colores_Unidos_Por_Coma = join(",", $Colores);
            echo $Colores_Unidos_Por_Coma;
            ?>
            <hr />

            <h3>explode() </h3>
            <h5>separa los caracteres de una cadena, mediante uno de sus propios caracteres. Cada separacion es un elemento de un array.</h5>
            <a href="http://www.php.net/manual/es/function.explode.php">Ver explode </a><br />
            <?php
            /* por ej: dada una fecha, separar por medio de la barra */
            $Fecha_Cadena = "23/04/1980";
            echo "Dada una fecha formato dd/mm/yyyy : $Fecha_Cadena , procedo a explotarla mediante la barra:";
            $Fecha_Array = explode('/', $Fecha_Cadena);  //devuelve un array
            echo '<pre>';
            print_r($Fecha_Array);
            echo '</pre>';
            ?>
            <hr />

            <h3>explode() por un guion</h3>
            <h5>separa los caracteres de una cadena, por el guion</h5>
            <?php
            /* separacion de elementos por el guion medio */
            $Fecha_Cadena = "23-04-1980";
            echo "Dada una fecha formato dd-mm-yyyy : $Fecha_Cadena , procedo a explotarla mediante el guion:";
            $Fecha_Array = explode('-', $Fecha_Cadena);  //devuelve un array
            echo '<pre>';
            print_r($Fecha_Array);
            echo '</pre>';
            ?>
            <hr />

            <h3>explode() por un espacio</h3>
            <h5>separa los caracteres de una cadena, por el espacio entre cada palabra</h5>
            <?php
            /* separacion de elementos por el espacio */
            $Cadena = "Cuando quieres realmente una cosa, todo el Universo conspira para ayudarte a conseguirla.";
            echo "Dada una cadena: $Cadena , procedo a explotarla mediante sus espacios:";
            $Palabras_Array = explode(' ', $Cadena);  //devuelve un array
            echo '<pre>';
            print_r($Palabras_Array);
            echo '</pre>';
            ?>
            <hr />

            <h3>count() </h3>
            <h5>cuenta la cantidad de elementos que posee un array</h5>
            <?php
            /* contar elementos de un array */
            $Cantidad_Palabras = count($Palabras_Array);  //devuelve un entero, la cantidad de elementos
            echo 'el array $Palabras_Array anteriormente generado contiene ' . $Cantidad_Palabras . ' palabras.';
            echo '<br />';
            ?>
            <hr />


            <h3>Tratamiento de una fecha</h3>
            <?php
            /* tratamiento de una fecha */
            $Fecha_Cadena = "23/04/1980 12:30:44";
            $FechaHora_Array = explode(' ', $Fecha_Cadena);  //devuelve un array, el 1er elemento es la fecha, el 2do la hora
            echo '<pre>';
            print_r($FechaHora_Array);
            echo '</pre>';

            $SoloFecha = $FechaHora_Array[0];
            echo $SoloFecha . '<br />';
            $SoloHora = $FechaHora_Array[1];
            echo $SoloHora . '<br />';

            echo "Mostrar cada elemento de la fecha y cada elemento de la hora :) <br />";

//	  $arrFecha=explode('/', $SoloFecha);
            $arrFecha = explode('/', $FechaHora_Array[0]);
            echo "el dia es {$arrFecha[0]} - el mes es {$arrFecha[1]} -  el a&ntilde;o es {$arrFecha[2]} <br />";

//	  $arrHora==explode(':', $FechaHora_Array[1]);
            $arrHora = explode(':', $SoloHora);
            echo "la hora es {$arrHora[0]} - el minuto es {$arrHora[1]} -  el segundo es {$arrHora[2]}";
            ?>

            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />      <hr />
            <hr />


        </div>
    </body>
</html>
