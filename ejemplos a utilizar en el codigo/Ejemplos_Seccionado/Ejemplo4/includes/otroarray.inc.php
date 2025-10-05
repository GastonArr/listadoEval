<?php
    
    /* Array multidimensional 
     * un array con 3 elementos [0 1 2]
     * cada elemento tiene 4 subelementos  [Nombre Apellido Documento EMail]
     */
    $Personas = array();
    
    $Personas[0]['Nombre']="Marcos";
    $Personas[0]['Apellido']="Perez";
    $Personas[0]['Documento']=11222333;
    $Personas[0]['EMail']="mperez@gmail.com";
    /***********************************************************/
    $Personas[1]['Nombre']="Juan";
    $Personas[1]['Apellido']="Britos";
    $Personas[1]['Documento']=22333444;
    $Personas[1]['EMail']="britos.juan@gmail.com";
    /***********************************************************/
    $Personas[2]['Nombre']="Maria";
    $Personas[2]['Apellido']="Gomez";
    $Personas[2]['Documento']=33444555;
    $Personas[2]['EMail']="mgomez@gmail.com";
    
    $cntPersonas=count($Personas);
?>
