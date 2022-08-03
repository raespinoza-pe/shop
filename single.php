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
    <title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <!--flex slider-->
    <script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/funciones_single.js"></script>
    <link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!--flex slider-->
    <script src="js/imagezoom.js"></script>
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
                <li class="active">Single page</li>
            </ol>
        </div>
    </div>
    <!--//breadcrumbs-->
    <!--single-page-->
    <div class="single">
        <div class="container">
            <div class="single-info">
                <div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">

                    <div class="flex-viewport" style="overflow: hidden; position: relative;">

                        <ul class="slides" id="single_page_header" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-0px, 0px, 0px);"> <!-- 0px -716px -358px -->


                        
                        </ul>

                    </div>
                    <ol class="flex-control-nav flex-control-thumbs" id="single_page_box">

                    </ol>


                </div>
                <div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s" id="single_page_body">
                </div>
                <div class="clearfix"> </div>
            </div>
            <template id="template-card">
                <li data-thumb="" class="" style="width: 358px; float: left; display: block;">
                    <div class="thumb-image"> <img src="" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                </li>
            </template>
            <template id="template-card-2">
                <li><img src="" class="" draggable="false" id=""></li>
            </template>
            <!--collapse-tabs-->
            <div class="collpse tabs">
                <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".6s">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    additional information
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".7s">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    reviews (5)
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".8s">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    help
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//collapse -->
            <!--related-products-->
            <div class="related-products">
                <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
                    <h3 class="title">Related<span> Products</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
                </div>
                <div class="related-products-info">
                    <div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
                        <div class="new-top">
                            <a href="single.html"><img src="images/g9.jpg" class="img-responsive" alt="" /></a>
                            <div class="new-text">
                                <ul>
                                    <li><a class="item_add" href=""> Add to cart</a></li>
                                    <li><a href="single.html">Quick View </a></li>
                                    <li><a href="products.html">Show Details </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-bottom">
                            <h5><a class="name" href="single.html">Baby Red Dress </a></h5>
                            <div class="rating">
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span>☆</span>
                            </div>
                            <div class="ofr">
                                <p class="pric1"><del>$2000.00</del></p>
                                <p><span class="item_price">$500</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
                        <div class="new-top">
                            <a href="single.html"><img src="images/g10.jpg" class="img-responsive" alt="" /></a>
                            <div class="new-text">
                                <ul>
                                    <li><a class="item_add" href=""> Add to cart</a></li>
                                    <li><a href="single.html">Quick View </a></li>
                                    <li><a href="products.html">Show Details </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-bottom">
                            <h5><a class="name" href="single.html">Crocs Sandals </a></h5>
                            <div class="rating">
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span>☆</span>
                            </div>
                            <div class="ofr">
                                <p class="pric1"><del>$2000.00</del></p>
                                <p><span class="item_price">$500</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
                        <div class="new-top">
                            <a href="single.html"><img src="images/g11.jpg" class="img-responsive" alt="" /></a>
                            <div class="new-text">
                                <ul>
                                    <li><a class="item_add" href=""> Add to cart</a></li>
                                    <li><a href="single.html">Quick View </a></li>
                                    <li><a href="products.html">Show Details </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-bottom">
                            <h5><a class="name" href="single.html">Pink Sip Cup </a></h5>
                            <div class="rating">
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span>☆</span>
                            </div>
                            <div class="ofr">
                                <p class="pric1"><del>$2000.00</del></p>
                                <p><span class="item_price">$500</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay="1.1s">
                        <div class="new-top">
                            <a href="single.html"><img src="images/g12.jpg" class="img-responsive" alt="" /></a>
                            <div class="new-text">
                                <ul>
                                    <li><a class="item_add" href=""> Add to cart</a></li>
                                    <li><a href="single.html">Quick View </a></li>
                                    <li><a href="products.html">Show Details </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-bottom">
                            <h5><a class="name" href="single.html">Child Print Bike </a></h5>
                            <div class="rating">
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span class="on">☆</span>
                                <span>☆</span>
                            </div>
                            <div class="ofr">
                                <p class="pric1"><del>$2000.00</del></p>
                                <p><span class="item_price">$500</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//related-products-->
        </div>
    </div>
    <!--//single-page-->
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
</body>

</html>