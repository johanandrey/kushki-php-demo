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
                        <input type="text" id="nombreInput1" class="form-control" placeholder="Nombres y apellidos" required>
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
                            <div class="col-auto col-lg-4">
                                <label for="celularInput"><i class="fas fa-phone"></i></label>
                                <input type="number" id="celularInput" class="form-control" placeholder="# de celular" required>
                            </div>
                            
                            <div class="col-5 mx-auto">
                                <div class="col-12">
                                <h4><span class="badge badge-secondary">Tallas de las pijamas</span></h4>
                                </div>
                                <div class="col-12 form-row align-items-center">
                                    <div class="col-auto">
                                        <label for="pijama1"><i class="fas fa-child"></i>&nbsp;Pijama 1 </label>
                                        <select class="form-control mb-2 mb-sm-0" id="pijama1" style="width: auto;" required>
                                            <option value="" selected="">--</option>
                                            <option value="1m">1M</option>
                                            <option value="3m">3M</option>
                                            <option value="6m">6M</option>
                                            <option value="12m">12M</option>
                                            <option value="18m">18M</option>
                                            <option value="23m">23M</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label for="pijama2"><i class="fas fa-male"></i>&nbsp;Pijama 2 </label>
                                        <select class="form-control mb-2 mb-sm-0" id="pijama2" style="width: auto;" required>
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

                            <div class="col-3">
                                <button id="pago" type="button" class="btn btn-default align-bottom">Iniciar Pago</button>
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
                                        <form id="kushki-pay-form" action="process.php" method="post">
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
       
        <!-- scripts and more -->
        <script src="KUSHKIJS"></script>
        <script src="KUSHKICHECKOUTJS"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script data-prerender="keep" async src="https://use.fortawesome.com/349cfdf6.js"></script>
        <!-- funcionality -->
        <script lang="javascript">
            function loadKushkiBox(){
                var kushki = new KushkiCheckout({
                form: "kushki-pay-form",
                merchant_id: "PUBLIC_KEY",
                amount: "69900",
                currency: "COP",
                is_subscription: false,
                isDeferred: true
                });
            }

            function validate(){
                nombre = document.getElementById('nombreInput1').value;
                documento = document.getElementById('docInput').value;
                ciudad = document.getElementById('ciudadInput').value;
                direccion = document.getElementById('direccionInput').value;
                email = document.getElementById('emailInput').value;
                celular = document.getElementById('celularInput').value;
                pijama1 = document.getElementById('pijama1').value;
                pijama2 = document.getElementById('pijama2').value;
                if( nombre.length < 8){
                    alert('Por favor coloque un nombre válido');
                    return false;
                }
                if( email.length < 7){
                    alert('Por favor coloque un email válido');
                    return false;
                }
                if( documento.length < 6){
                    alert('Por favor coloque un documento válido');
                    return false;
                }
                if( ciudad.length < 4){
                    alert('Por favor coloque una ciudad válida');
                    return false;
                }
                if( direccion.length < 8){
                    alert('Por favor coloque una dirección válida');
                    return false;
                }
                if( celular.length < 6){
                    alert('Por favor coloque un número de celular válido');
                    return false;
                }
                if( pijama1 == "" || pijama2 == ""){
                    alert('Por favor seleccione una talla de pijama');
                    return false;   
                }
                return true;
            }

            function disable(){
                document.getElementById('nombreInput1').disabled = true;
                document.getElementById('docInput').disabled = true;
                document.getElementById('tipoDocInput').disabled = true;
                document.getElementById('ciudadInput').disabled = true;
                document.getElementById('direccionInput').disabled = true;
                document.getElementById('emailInput').disabled = true;
                document.getElementById('celularInput').disabled = true;
                document.getElementById('pijama1').disabled = true;
                document.getElementById('pijama2').disabled = true;
                document.getElementById('pago').disabled = true;
            }

            $(document).ready(function(){
                $("#pago").click(function(){
                    if (!validate())
                        return;
                    disable();
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
