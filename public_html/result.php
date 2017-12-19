<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Compra Tienda Virtual</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script defer src="js/fontawesome-all.js"></script>
</head>
<!--/head-->

<body style="margin-top: 50px;">
    <div class="container">        
        <div class="row">
            <div class="card col-xs-12 col-sm-12 col-md-12  col-lg-12 text-center bg-light">
                <div class="card-block">
                    <h2>¡Gracias por su compra!</h2>
                    Su pago se realizó exitosamente. La entrega se realizará a la dirección registrada.
                    <br>
                    <p>
                        Se ha cobrado $69.900 COP a su tarjeta.
                    </p> Su número de ticket es <em><?php echo $_SESSION["ticket"]?></em>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="card col-xs-6  col-sm-6  col-md-6 col-lg-6" >
                <div class="card-header">
                    Resumen del Pedido
                </div>                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Subtotal IVA</div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                $58.739 COP</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                IVA </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                $11.161 COP</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 strong">
                                Total </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right strong">
                                $69.900 COP</div>
                        </div>
                    </li>
                </ul>                
            </div>
            <br />
            <div class="card col-xs-6  col-sm-6  col-md-6 col-lg-6" >
                <div class="card-header">
                    Facturación y Entrega
                </div>                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Nombre </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                               <?php echo $_SESSION["nombre"]?>  </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Identificación </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                <?php echo $_SESSION["tipoDocumento"] . "&nbsp" .  $_SESSION["documento"]?> </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Dirección </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                <?php echo $_SESSION["direccion"]?> </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Teléfono </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                <?php echo $_SESSION["celular"]?> </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Talla Pijama 1  </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                <?php echo $_SESSION["pijama1"]?> </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row box-row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7 ">
                                Talla Pijama 2  </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 text-right ">
                                <?php echo $_SESSION["pijama2"]?> </div>
                        </div>
                    </li>
                </ul>                
            </div>
        </div>
        <br />        
    </div>


    <footer id="footer">
        <!--Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 Kushki All rights reserved.</p>
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <!-- scripts and more -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <script data-prerender="keep" async src="https://use.fortawesome.com/349cfdf6.js"></script>
</body>

</html>
<?php session_destroy();?>