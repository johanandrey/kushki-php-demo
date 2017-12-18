<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Checkout | E-Shopper</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link href="css/freelancer.min.css" rel="stylesheet">

        <script src="https://p-uat.kushkipagos.com/kushki/kushki/kushki.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center text-uppercase text-secondary mb-0">Tus datos</h3>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nombre completo</label>
                                <input class="form-control" id="name" placeholder="Nombre completo" required="required" data-validation-required-message="Por favor coloque su nombre completo." aria-invalid="false" type="text">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email</label>
                            <input class="form-control" id="email" placeholder="Email" required="required" data-validation-required-message="Coloque su dirección de correo electrónico" type="email">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Número de celular</label>
                            <input class="form-control" id="phone" placeholder="Celular" required="required" data-validation-required-message="Por favor introduzca su número de celular." type="tel">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Ciudad de envío</label>
                            <input class="form-control" id="phone" placeholder="Dirección de envío" required="required" data-validation-required-message="Seleccione una ciudad." type="text">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Dirección de envío</label>
                            <input class="form-control" id="phone" placeholder="Dirección de envío" required="required" data-validation-required-message="Por favor coloque su dirección donde recibirá su pedido." type="text">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section id="data">
        </section>
         <!--/#cart_items-->

        <section id="payment">
            <div class="container">
                <div class="review-payment">
                    <h2>Pago seguro</h2>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Kushki Snippet Begins -->
                        <button onclick="runCode()">Test</button>
                        <script lang="javascript">
                            function runCode() {
                              var kushki = new Kushki({merchantId: '10000001641080185390111217', inTestEnvironment: true});
                              var cardData = {
                                name: 'Jose',
                                number: '4242424242424242',
                                cvc: "123",
                                expiryMonth: '12',
                                expiryYear: '21'
                              };
                              var callback = function (response) {
                                console.log(response)
                              };
                              kushki.requestToken({
                                amount: '49.99',
                                isDeferred: false,
                                card: cardData
                              }, callback);
                            }

                        </script>

                        <!-- Kushki Snippet Ends -->
                    </div>
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



    </body>
</html>
