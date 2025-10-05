<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html">
    </head>
    <body>
        <div>
            <h2>Funciones de Fechas con PHP:</h2>
            

            <h3>Fecha Actual</h3>
            <h5>toma parametros en cada caso para devolver lo que necesitamos. Revisar la siguiente documentacion</h5>
            <a href="http://ar2.php.net/manual/es/function.date.php">
                http://ar2.php.net/manual/es/function.date.php </a>
            <br />
            <br />
            <br />
            <?php
            //fecha actual del servidor
            $Hoy = date('d/m/Y H:i:s');
            echo "La fecha y hora actual del servidor es: " . $Hoy;
            echo '<br />';
            $Hoy = date('m-d-Y H:i:s');
            echo "La fecha y hora actual del servidor es: " . $Hoy . ' [noten otro formato con la misma informacion]';

            $DiaHoy = date("d");
            echo 'Numero de dia de hoy: ' . $DiaHoy . '<hr />';

            $TextoDiaHoy = date("D");
            echo 'Texto dia de hoy en ingles: ' . $TextoDiaHoy . '<hr />';

            $MesHoy = date("m");
            echo 'mes de hoy: ' . $MesHoy . '<hr />';

            $TextoMesHoy = date("M");
            echo 'Texto mes de hoy en ingles: ' . $TextoMesHoy . '<hr />';

            $NroDeDiaDeLaSemana = date("w");
            echo 'Nro De Dia De La Semana: ' . $NroDeDiaDeLaSemana . ' [0 (para domingo) hasta 6 (para sabado)] <hr />';

            $AnioHoy_2dig = date("y");
            echo 'A&ntilde;o de hoy 2 dig: ' . $AnioHoy_2dig . '<hr />';

            $AnioHoy_4dig = date("Y");
            echo 'A&ntilde;o de hoy 4 dig: ' . $AnioHoy_4dig . '<hr />';

            $TextoMesHoy = date("M");
            echo 'Texto mes de hoy en ingles: ' . $TextoMesHoy . '<hr />';
            ?>


            <h3>checkdate() - Checkeo de fecha correcta</h3>
            <h5>toma 3 parametros en este orden: MES, Dia, Año: nos dice si la fecha ingresada es correcta o no</h5>
            <?php
            $Dia = 30;
            $Mes = 04;
            $Anio = 2012;
            if (checkdate($Mes, $Dia, $Anio) == true) {
                echo "<font color='#0000ff' >La fecha $Dia-$Mes-$Anio es correcta</font>";
            } else {
                echo "<font color='#ff0000' >La fecha $Dia-$Mes-$Anio es INcorrecta</font>";
            }
            ?><hr />


            <h3>Funciones de Hora</h3>

            <?php
            $HoraActual = date('h'); //Formato de 12 horas de una hora con ceros iniciales
            echo '$HoraActual: ' . $HoraActual . '<hr />';

            $HoraActual = date('H'); //Formato de 24 horas de una hora con ceros iniciales
            echo '$HoraActual ' . $HoraActual . '<hr />';

            $MinutoActual = date('i');
            echo '$MinutoActual ' . $MinutoActual . '<hr />';

            $SegundoActual = date('s');
            echo '$SegundoActual ' . $SegundoActual . '<hr />';
            ?>


            <h3>Fecha y Hora actuales [del servidor]</h3>
            <?php
            $Fecha_Hora_Ya = date('d/m/Y H:i:s');
            echo $Fecha_Hora_Ya . '<hr />';
            ?>


            <h3>TimeStamp</h3>
            <a href="http://ar2.php.net/manual/es/function.mktime.php">http://ar2.php.net/manual/es/function.mktime.php</a><br />
            <?php
            $Hora = 10;
            $Minuto = 30;
            $Segundo = 10;
            $Dia = 23;
            $Mes = 5;
            $Anio = 2012;

            $timestamp = mktime($Hora, $Minuto, $Segundo, $Mes, $Dia, $Anio); //genera un numero entero 
            echo '$timestamp: ' . $timestamp . '<br />';

            $Fecha_Formateada_1 = date('d/m/Y H:i:s', $timestamp);
            echo '$Fecha_Formateada_1: ' . $Fecha_Formateada_1 . '<br />';

            $Fecha_Formateada_2 = date('d/m/Y', $timestamp);
            echo '$Fecha_Formateada_2: ' . $Fecha_Formateada_2 . '<br />';

            $Fecha_Formateada_3 = date('w', $timestamp);
            echo '$Fecha_Formateada_3: ' . $Fecha_Formateada_3 . '<br />';
            ?>

            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


        </div>
    </body>
</html>
