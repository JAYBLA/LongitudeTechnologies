<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title ?>-Longitude Technologies</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/owl.theme.default.min.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/nice-select.css">

    <!-- magnific popup - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/magnific-popup.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/custom.css">   
</head>


<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div id="backtotop">
        <a href="#" id="scroll">
            <i class="fa fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div class="preloader">
        <div class="animation_preloader">
            <div class="spinner"></div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row vh-100">
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader - end -->


    <!-- header_section - start
		================================================== -->
    <?= $this->include('layouts/includes/header') ?>
    <!-- header_section - end
		================================================== -->


    <!-- main body - start
		================================================== -->
    <main>
        <?= $this->rendersection('content') ?>
    </main>
    <!-- main body - end
		================================================== -->


    <!-- footer_section - start
		================================================== -->
    <?= $this->include('layouts/includes/footer') ?>
    <!-- footer_section - end
		================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="<?= base_url() ?>/assets/js/owl.carousel.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="<?= base_url() ?>/assets/js/mCustomScrollbar.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6">
    </script>
    <script src="<?= base_url() ?>/assets/js/gmaps.min.js"></script>

    <!-- nice select - jquery include -->
    <script src="<?= base_url() ?>/assets/js/nice-select.min.js"></script>

    <!-- circle progress - jquery include -->
    <script src="<?= base_url() ?>/assets/js/circle-progress.min.js"></script>

    <!-- magnific popup - jquery include -->
    <script src="<?= base_url() ?>/assets/js/magnific-popup.min.js"></script>

    <!-- filter & masonry js -->
    <script src="<?= base_url() ?>/assets/js/isotope.pkgd.js"></script>
    <script src="<?= base_url() ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/masonry.pkgd.min.js"></script>

    <!-- counter - jquery include -->
    <script src="<?= base_url() ?>/assets/js/countto.js"></script>

    <!-- pricing range - jquery include -->
    <script src="<?= base_url() ?>/assets/js/jquery-ui.js"></script>

    <!-- animation - jquery include -->
    <script src="<?= base_url() ?>/assets/js/parallax.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wow.min.js"></script>

    <!-- custom - jquery include -->
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>    
    <script>
        $(document).ready(function () {            
            $("#toMobileMenu")
            .clone()
            .removeClass('ul_li_center')
            .addClass('navbar-nav ml-auto top-nav')
            .appendTo("#longitudenavbarResponsive");           
        });        
    </script>
    <script>
        $(".has_child").click(function(){
        $(".submenu").addClass('submenushow');
        });
    </script>
    <?= $this->rendersection('javascript') ?>
</body>

</html>