<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html">
    </head>
    <body>
        <div>
            <h2>Funciones generales con PHP:</h2>


            <h3>empty() - toma un valor como parametro: puede ser cadena o array </h3>
            <h5>pregunta si ese valor esta vacio</h5>
            <?php
            $Cadena = "13456";
            if (empty($Cadena)) {
                echo 'La variable $Cadena esta vacia. <br />';
            } else {
                echo 'La variable $Cadena contiene: ' . $Cadena . ' y NO est&aacute; vac&iacute;a. <br />';
            }

            $Cadena = "         "; //noten que CONTIENE ESPACIOS EN BLANCO
            if (empty($Cadena)) {
                echo 'La variable $Cadena esta vacia. <br />';
            } else {
                echo 'La variable $Cadena contiene: ' . $Cadena . ' y NO est&aacute; vac&iacute;a. <br />';
            }
            ?>
            <hr />

            <?php
            $Var = array();
            $Var[] = 'Elemento1';
            $Var[] = 'Elemento2';
            $Var[] = 'Elemento3';
            // $Var=array();
            if (empty($Var)) {
                echo 'La variable $Var esta vacia. <br />';
            } else {
                echo 'este array contiene elementos: ';
                print_r($Var);
            }
            ?>
            <hr />

            <?php
            $Var = 0; //notar la diferencia
            if (empty($Var)){
                echo 'La variable $Var esta vacia. A PESAR QUE CONTIENE EL CERO COMO VALOR<br />';
            }else{
                echo 'La variable $Var contiene ' . $Var;
            }
            ?>
            <br />
            Revisar: <a href="http://www.anerbarrena.com/php-empty-4894/">http://www.anerbarrena.com/php-empty-4894/</a>
            <hr />


            <h3>rand() - toma dos numeros como parametros  </h3>
            <h5>devuelve un numero aleatorio entre dos numeros dados</h5>
            <?php
            echo "mostrar valores aleatorios entre dos numeros especificados: 5 y 20 incluidos: "; 
            echo rand(5, 20);
            ?>

            <hr />


        </div>
    </body>
</html>
