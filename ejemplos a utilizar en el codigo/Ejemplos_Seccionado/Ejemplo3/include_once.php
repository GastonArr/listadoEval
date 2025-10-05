<?php 
//uso la funcion include_once brindandole la ruta del archivo que deseo incluir
//noten la ruta especificada:    
include_once ('carpeta1/array.inc.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo Inclusion</title>
        <meta http-equiv="Content-Type" content="text/html;">
    </head>
    <body>
        <div>
            <h3>Listado de personas</h3>
            <?php 
            for ($i=0; $i<$cntPersonas; $i++) { ?>
            
                <strong>Nombre y Apellido: </strong><?php echo $Personas[$i]['Nombre'].' '.$Personas[$i]['Apellido']; ?> <br />
                <strong>Documento: </strong><?php echo $Personas[$i]['Documento']; ?> <br />
                <strong>Email: </strong><?php echo $Personas[$i]['EMail']; ?> <br />
                <hr />
            <?php
            }
            ?>
        </div>
    </body>
</html>
