<?php 
//uso la funcion require_once brindandole la ruta del archivo que deseo incluir
//en este caso, array.inc.php esta a la misma altura que este archivo
//por eso no especifico una carpeta
require_once ('array.inc.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo Inclusion</title>
        <meta http-equiv="Content-Type" content="text/html">
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
