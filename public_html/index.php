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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="css/fontawesome-all.min.css" >
         <script defer src="js/fontawesome-all.js"></script>
    </head><!--/head-->
    <body style="margin-top: 50px;">
        <div class="container">
             <h2>Datos de tu compra</h2>
             <!-- <form>-->
             <div class="row">
                <div class="col-sm-8">
                    <div class="col-auto">
                        <label for="nombreInput1"><i class="far fa-user"></i></label>
                        <input type="text" id="nombreInput1" class="form-control" placeholder="Nombre" required>
                    </div>
                    <br />
                    <div class="col-auto">
                        <label for="emailInput"><i class="far fa-envelope"></i></label>
                        <input type="email" id="emailInput" class="form-control" placeholder="Email" required>
                    </div>
                    <br />
                    <div class="col-auto">
                    <div class="form-row align-items-center">
                        <div class="col-auto col-lg-4">
                            <label for="tipoDocInput"><i class="far fa-id-card"></i></label>
                            <select class="form-control mb-2 mb-sm-0" id="tipoDocInput" style="width:auto;" required>
                                <option value="CC">Cédula de ciudadanía</option>
                                <option value="CE">Cédula de extranjería</option>
                            </select>
                        </div>
                        <div class="col-auto col-lg-8">
                            <label for="docInput"><br /></label>
                            <input type="number" id="docInput" class="form-control mb-2 mb-sm-0" placeholder="Número de documento" required>
                        </div>
                    </div>
                    </div>
                    <br />
                    <div class="col-auto">
                    <div class="form-row align-items-center">
                        <div class="col-auto col-md-4">
                            <label for="ciudadInput"><i class="fas fa-map-marker"></i></label>
                            <input type="text" id="ciudadInput" class="form-control" placeholder="Ciudad y departamento" required>
                        </div>
                        <div class="col-auto col-md-8">
                            <label for="direccionInput">&nbsp;</label>
                            <input type="text" id="direccionInput" class="form-control" placeholder="Dirección completa" required>
                        </div>
                    </div>
                    </div>
                    <br />
                     <div class="col-auto">
                        <div class="form-row align-items-center">
                            <div class="col-4">
                                <label for="celularInput"><i class="fas fa-phone"></i></label>
                                <input type="number" id="celularInput" class="form-control" placeholder="Número de celular" required>
                            </div>
                            <div class="col-auto">
                                <button id="pago" type="button" class="btn btn-default align-bottom">Iniciar Pago</button>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="col-auto">
                        <div class="row h-100 justify-content-center align-items-center">
                            <h3><span class="badge badge-secondary">Tallas de las pijamas</span></h3>
                            <div class="col-auto">
                                    <label for="pijama1"><i class="fas fa-child"></i>&nbsp;Pijama 1</label>
                                    <select class="form-control mb-2 mb-sm-0" id="pijama1" style="width :auto;" required>
                                    <option value="" selected="">--</option>
                                    <option value="1m">1M</option>
                                    <option value="3m">3M</option>
                                    <option value="6m">6M</option>
                                    <option value="12m">12M</option>
                                    <option value="18m">18M</option>
                                    <option value="23m">23M</option>
                                </select>
                            </div>
                            <div class="col-6">
                                    <label for="pijama2"><i class="fas fa-child"></i>&nbsp;Pijama 2 </label>
                                    <select class="form-control mb-2 mb-sm-0" id="pijama2" style="width :auto;" required>
                                    <option value="" selected="">--</option>
                                    <option value="1m">1M</option>
                                    <option value="3m">3M</option>
                                    <option value="6m">6M</option>
                                    <option value="12M">12M</option>
                                    <option value="18M">18M</option>
                                    <option value="23M">23M</option>
                                </select>
                            </div>
                        </div>
                        </div>
                </div><!-- closes left panel -->
                <div class="col-sm-4">
                    <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Pago Seguro</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>
                                    <div class="col-auto">
                                        <form id="kushki-pay-form" action="result.php" method="post">
                                            <input type="hidden" name="cart_id" value="123">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!--</form>-->
        <p><br /><br /><br /></p>
       

        <section id="payment">
            <div class="review-payment">
                <h2>Pago seguro</h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Kushki Snippet Begins -->
                    <button onclick="loadKushkiBox()">Test</button>
                    <button id="boton">Post</button>
                    </script>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2017 Kushki All rights reserved.</p>
                        </span></p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->

        <!-- scripts and more -->
        <script src="https://p-uat.kushkipagos.com/kushki/kushki/kushki.min.js"></script>
        <script src="https://cdn-uat.kushkipagos.com/kushki-checkout.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script data-prerender="keep" async src="https://use.fortawesome.com/349cfdf6.js"></script>
        <!-- funcionality -->
        <script lang="javascript">
            function loadKushkiBox(){
                var kushki = new KushkiCheckout({
                form: "kushki-pay-form",
                merchant_id: "10000002817375228986151319726277",
                amount: "69900",
                currency: "COP",
                is_subscription: false,
                isDeferred: true
                });
            }
            $(document).ready(function(){
                $("#pago").click(function(){
                    $.post("store.php",
                        {
                            nombre: document.getElementById('nombreInput1').value,
                            tipoDocumento: document.getElementById('tipoDocInput').value,
                            documento: document.getElementById('docInput').value,
                            ciudad: document.getElementById('ciudadInput').value,
                            direccion: document.getElementById('direccionInput').value,
                            email: document.getElementById('emailInput').value,
                            celular: document.getElementById('celularInput').value,
                            pijama1: document.getElementById('pijama1').value,
                            pijama2: document.getElementById('pijama2').value
                        },
                        function(data,status){
                            if (status == "success"){
                                loadKushkiBox();
                            } else {
                                alert("shit");
                            }
                        });
                });
            });
    </script>
    </body>
</html>
