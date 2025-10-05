<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html">
  </head>
  <body>
    <div>
      <h2>Funciones de cadenas con PHP:</h2>
      
      
      <h3>Limpieza de espacios: </h3>
      <?php 
      $Cadena="        HOLA         ";
      echo 'La variable $Cadena contiene: ['.$Cadena.']<br />'; //ver codigo fuente
      ?>
      <hr />
      
      <?php 
      //limpiar la izquierda: (Left)
      $Cadena_LimpiaLeft=ltrim($Cadena);
      echo 'La variable limpia desde la izquierda con ltrim($parametro): '.$Cadena_LimpiaLeft.'<br />';
      ?>
      <hr />
      
      <?php 
      //limpiar la derecha: (Right)
      $Cadena_LimpiaRight=rtrim($Cadena);
      echo 'La variable limpia desde la derecha con rtrim($parametro) : '.$Cadena_LimpiaRight.'<br />';
      ?>
      <hr />
      
      <?php 
      //limpiar derecha e izquierda: (Right)
      $Cadena_Limpia=trim($Cadena);
      echo 'La variable limpia der/izq con trim($parametro) : '.$Cadena_Limpia.'<br />';
      ?>
      <hr />
      
         
      <h3>strlen() </h3>
       <?php 
      $Cadena = "sue palacios";
      $Cantidad_Caracteres=strlen($Cadena); //devuelve un entero, la cantidad de caracteres incluidos los espacios
      echo "<i>$Cadena</i><br />Contiene $Cantidad_Caracteres caracteres. <br />";
      $Cadena = "Cuando quieres realmente una cosa, todo el Universo conspira para ayudarte a conseguirla. [Paulo Coelho]";
      $Cantidad_Caracteres=strlen($Cadena); //devuelve un entero, la cantidad de caracteres incluidos los espacios
      echo "<i>$Cadena</i><br />Contiene $Cantidad_Caracteres caracteres. <br />"; ?>
      <hr />
      
      <h3>strlen() y los espacios </h3>
      <?php 
      $Cadena = "          Cuando quieres realmente una cosa, todo el Universo conspira para ayudarte a conseguirla. [Paulo Coelho]        ";
      $Cantidad_Caracteres=strlen($Cadena); //devuelve un entero, la cantidad de caracteres incluidos los espacios
      echo "<i>$Cadena</i><br />Contiene $Cantidad_Caracteres caracteres. <br />";
      $Cadena = trim($Cadena); //limpio espacios
      $Cantidad_Caracteres=strlen($Cadena); //devuelve un entero, la cantidad de caracteres
      echo "<i>$Cadena</i><br />[cadena limpia] Contiene $Cantidad_Caracteres caracteres. <br />";
      ?>
      <hr />
      
      
      <h3>Mayusculas y minusculas </h3>
      <?php 
      $Cadena = "El camino es el que nos enseña la mejor forma de llegar y nos enriquece mientras lo estamos cruzando.";
      $Autor="Paulo Coelho";
      echo 'Frase: '.$Cadena.'<br />';
      echo 'Autor: '.$Autor.'<br />';
      
      //cambio todo a mayusculas
      $CadenaEnMayuscula=  strtoupper($Cadena);
      $AutorEnMayuscula=  strtoupper($Autor);
      echo 'Frase en May: '.$CadenaEnMayuscula.'<br />';
      echo 'Autor en May: '.$AutorEnMayuscula.'<br />';
      
      //cambio todo a minusculas
      $CadenaEnMinuscula= strtolower($Cadena);
      $AutorEnMinuscula=  strtolower($Autor);
      echo 'Frase en Min: '.$CadenaEnMinuscula.'<br />';
      echo 'Autor en Min: '.$AutorEnMinuscula.'<br />';
      
      //cambio la PRIMER LETRA a mayuscula y el resto a minuscula
      $CadenaPrimerLetraMayuscula= ucfirst($CadenaEnMinuscula); //Upper Case First /Lower Case First [lcfirst()]
      //cambio la Primer Letra de cada palabra a mayuscula
      $AutorPrimerLetraMayuscula=  ucwords($AutorEnMinuscula);
      echo 'Frase Primer Letra Mayuscula: '.$CadenaPrimerLetraMayuscula.'<br />';
      echo 'Autor Primer Letra cada palabra en Mayuscula: '.$AutorPrimerLetraMayuscula.'<br />';
      ?>
      <hr />
      
      
      <h3>substr() Extrae parte de una cadena </h3>
      <?php  //s=0 u=1
      $Cadena = substr("sue palacios", 0, 5);  
      //desde el primer caracter (el de posicion 0), tomar 5 caracteres
      echo 'Cadena: '.$Cadena.'<br />';
      
      $Cadena = substr("sue palacios", 0, 7);  
      //desde el primer caracter (el de posicion 0), tomar 7 caracteres
      echo 'Cadena: '.$Cadena.'<br />';
      
      $Cadena = substr("sue palacios", 4, 8 ); 
      //desde el 4 elemento, tomar 8 caracteres
      echo 'Cadena: '.$Cadena.'<br />';
      ?>
      <hr />
      
      
      <h3>strstr() Pregunta si cierto caracter esta presente en la cadena </h3>
      <?php  
      $Email  = 'jorgerodriguez@gmail.com';
      echo $Email.'<br />'; 
      
      $Dominio = strstr($Email, '@');
      echo 'El dominio de este mail es: '.$Dominio.'<br />'; // mostrara a partir del @

      $Email="mail_arroba_dominio_dot_com";
      if (!strstr($Email, '@')) {  //no existe el @ en esta cadena??? NOTEN EL ! para indicar negacion
        echo $Email.': a este email le falta el @ <br />';
      }
      if (!strstr($Email, '.')) { //no existe el punto en esta cadena?
        echo  $Email.':a este email le falta el . <br />';
      }else {
        echo 'el mail <i>'.$Email.'</i> parece estar bien '; //falta analizar la longitud
      }
      ?>
      <hr />
      
      
      <h3>strip_tags() Limpia de etiquetas HTML de un string </h3>
      <?php  
      
      $Texto_con_HTML = "
      
        <font color='#ff0000'> texto comun </font>
          <!-- Comentario html --> 
        <a href='index.html'>Link </a>
        <p>parrafo </p>";
      
      echo 'Texto con HTML: '.$Texto_con_HTML.'<br />';
      
      $Texto_sin_HTML= strip_tags($Texto_con_HTML);
      echo "Texto sin HTML: $Texto_sin_HTML ";
      echo "<br />";

      ?>
      <hr />
      
      
    </div>
  </body>
</html>
