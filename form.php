<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

if (isset($_COOKIE['token_usuario'])) {
} else {
    setcookie("token_usuario", bin2hex(openssl_random_pseudo_bytes(32)), time() + 604800);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//for-mobile-apps -->
    <!--Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--//js-->
    <!--cart-->
    <script src="js/simpleCart.min.js"></script>
    <!--cart-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
    <!--web-fonts-->
    <!--animation-effect-->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//animation-effect-->
    <!--close-button-->
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.cart-header').fadeOut('slow', function(c) {
                    $('.cart-header').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close1').on('click', function(c) {
                $('.cart-header1').fadeOut('slow', function(c) {
                    $('.cart-header1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close2').on('click', function(c) {
                $('.cart-header2').fadeOut('slow', function(c) {
                    $('.cart-header2').remove();
                });
            });
        });
    </script>
    <!--//close-button-->
    <!--start-smooth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
</head>

<body>
    <!--header-->
    <?php
    require_once('templates/header.php');
    ?>
    <!--//header-->
    <!--breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Formulario de Envio</li>
            </ol>
        </div>
    </div>
    <!--//breadcrumbs-->
    <!--cart-items-->
    <div class="codes">
        <div class="container">
            <h3 class="hdg">Formulario de Orden de Compra</h3>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" required="">Nombres y apellidos</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="names" placeholder="nombre , apellido" onkeyup="validar_nombre()">
                </div>
                <div id="nombre_apellido" style="color:red"></div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" required="">Correo electronico</label>
                <div class="col-md-4">
                    <input type="email" class="form-control" id="email_adress" placeholder="email@gmail.com" onkeyup="validar_email()">
                </div>
                <div id="correo_electronico" style="color:red"></div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" required="">Número telefonico</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="num_phone" placeholder="#########" onkeyup="validar_telefono()">
                </div>
                <div id="numero_telefonico" style="color:red"></div>
            </div>
            <div class="row mb-4">
                <div id="resumen_compra" class="col-md-5"></div>
                <div class="col-md-1" id="button_formulario">
                    <button type="submit" class="btn btn-primary" onClick="enviar_mensaje()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--//cart-items-->
    <!--footer-->
    <?php
    require_once('templates/footer.php');
    ?>
    <!--//footer-->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--//search jQuery-->
    <!--smooth-scrolling-of-move-up-->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--//smooth-scrolling-of-move-up-->
    <!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script defer src="js/funciones_form.js"></script>
</body>

</html>