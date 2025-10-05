<?php require_once 'includes/array.inc.php'; ?>
<?php require_once 'includes/variables_link3.inc.php'; ?>
<?php require_once 'header.inc.php'; ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php"><?php echo $TituloCentral; ?></a>

            </div>
            <!-- /.navbar-header -->

            <?php require_once 'header.inc.php'; ?>

            <?php require_once 'menu.inc.php'; ?>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        <?php echo $MensajeCentral; ?>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $EncabezadoPanel; ?>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-info">
                                <p class="fa fa-info-circle"></p>
                                <?php echo $Informacion; ?>
                            </div>
                            <div class="alert alert-warning">
                                <?php echo $InformacionDeAcceso; ?>
                            </div>

                            <h3>Listado de personas</h3>
                            <?php for ($i = 0; $i < $cntPersonas; $i++) { ?>

                                <strong>Nombre y Apellido: </strong><?php echo $Personas[$i]['Nombre'] . ' ' . $Personas[$i]['Apellido']; ?> <br />
                                <strong>Documento: </strong><?php echo $Personas[$i]['Documento']; ?> <br />
                                <strong>Email: </strong><?php echo $Personas[$i]['EMail']; ?> <br />
                                <hr />
                                <?php
                            }
                            ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once 'footer.inc.php'; ?>