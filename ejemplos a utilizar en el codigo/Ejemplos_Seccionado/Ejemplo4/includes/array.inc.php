<?php
    
    /* Array multidimensional 
     * un array con 3 elementos [0 1 2]
     * cada elemento tiene 4 subelementos  [Nombre Apellido Documento EMail]
     */
    $Personas = array();
    
    $Personas[0]['Nombre']="Sue";
    $Personas[0]['Apellido']="Palacios";
    $Personas[0]['Documento']=11222333;
    $Personas[0]['EMail']="palacios.sue@gmail.com";
    /***********************************************************/
    $Personas[1]['Nombre']="Juan";
    $Personas[1]['Apellido']="Perez";
    $Personas[1]['Documento']=22333444;
    $Personas[1]['EMail']="perez.juan@gmail.com";
    /***********************************************************/
    $Personas[2]['Nombre']="Jose";
    $Personas[2]['Apellido']="Martinez";
    $Personas[2]['Documento']=33444555;
    $Personas[2]['EMail']="martinez.jose@gmail.com";
    
    $cntPersonas=count($Personas);
?>
