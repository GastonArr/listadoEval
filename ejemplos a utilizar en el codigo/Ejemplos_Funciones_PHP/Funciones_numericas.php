<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html">
  </head>
  <body>
    <div>
      <h2>Funciones de numeros con PHP:</h2>
      
      
      <h3>is_numeric($parametro) [devuelve True o False]</h3>
      <?php 
      /***********************************************************************/
      $Cadena="13456"; 
      //$Cadena="blablabla";  //probar descomentando esta linea, y comentando la anterior
      //segun sea o no un numero, se mostrará el mensaje correspondiente
      if (is_numeric($Cadena)){
        echo 'La variable $Cadena contiene: '.$Cadena.' y es un numero. <br />';
      }else {
        echo 'La variable $Cadena contiene: '.$Cadena.' y NO es un numero. <br />';
      }
      /***********************************************************************/
      ?>
      <hr />
      
      <h3>is_integer($parametro) [devuelve True o False] </h3>
      <?php 
      $Numero=13456;
      //$Numero=13456.40;
      if (is_integer($Numero)){
          //la pregunta es "Es $Numero un numero entero? Este proceso se ejecuta si lo es... 
        echo 'La variable $Cadena contiene: '.$Cadena.' y es un numero ENTERO. <br />';
      }else {
          //Este proceso se ejecuta si $Numero NO es un numero entero.
        echo 'La variable $Cadena contiene: '.$Cadena.' y NO es un numero ENTERO. <br />';
      }
      /***********************************************************************/
      ?>
      
      <h3>is_float($parametro) [devuelve True o False]</h3>
      <?php 
      $Numero=111.39;
//      $Numero=111;
      if (is_float($Numero)){
          //la pregunta es "Es $Numero un numero decimal? Este proceso se ejecuta si lo es... 
        echo 'La variable $Cadena contiene: '.$Cadena.' y es un numero DECIMAL. <br />';
      }else {
          //Este proceso se ejecuta si $Numero NO es un numero decimal.
        echo 'La variable $Cadena contiene: '.$Cadena.' y NO es un numero DECIMAL. <br />';
      }
      //recordar que los decimales se separan con PUNTO
      /***********************************************************************/
     ?>
      
      <hr />
      
      <h3>number_format($parametro, $decimales, 'separador_decimales', 'separador_miles') [devuelve un numero] </h3>
      <?php 
      $Numero=112299.45; //dos decimales
      echo 'Numero sin formatear: '.$Numero; 
      echo '<br />';
      /*la funcion formatea el $Numero brindado:
       * parametro1: $Numero : el numero a formatear
       * parametro2: cantidad de decimales que deseo mostrar
       * parametro3: separador de decimales que deseo mostrar
       * parametro4: separador de miles que deseo mostrar
      */
      $NumeroFormateado= number_format($Numero, 2, ',', '.'); //nuestro formato
      echo 'Numero con formato: '.$NumeroFormateado;
      ?>
      
      <hr />
      
      <h3>max($parametro1, $parametro......)  </h3>
      max() devuelve el mayor valor numerico de los parametros. <br />
      <?php 
      echo "el valor maximo entre 1, 3, 5, 6, 7 es ".max(1, 3, 5, 6, 7).'<br />';  
      echo "usando array: el valor maximo de un array q contiene 2, 4, 5 es ".max(array(2, 4, 5)).'<br />'; 
      //noten que es un array simple, del cual la funcion automaticamente calcula el maximo
      ?>
      <hr />
      
      
      <h3>min($parametro1, $parametro......) </h3>
      min() devuelve el valor numericamente mas bajo de los par�metros.<br />
      <?php
        echo "el minimo entre 2, 3, 1, 6, 7 es: ".min(2, 3, 1, 6, 7).'<br />';  
        echo "usando array: el minimo de un array q contiene 2, 4, 5 es: ".min(array(2, 4, 5)).'<br />';  
         //noten que es un array simple, del cual la funcion automaticamente calcula el minimo
      ?>   
      <hr />
      
      
      
    </div>
  </body>
</html>
