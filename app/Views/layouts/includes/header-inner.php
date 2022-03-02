<header class="header_section sticky_header stuckInner d-none shadow-sm d-lg-block">
    <div class="header_bottom pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-items-left">
                    <div class="headerLogo">
                        <a href="/">
                            <img src="<?=base_url() ?>/assets/images/logo.png" alt="logo_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-9">
                <nav class="main_menu ml-5">
                        <ul class="ul_li_center" id="toMobileMenu">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>/planetarium_and_telescope">Planetarium & Telescope</a>
                            </li>
                            <li class="has_child">
                                <a href="#">products & services</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?= base_url() ?>/precision_agriculture">Precision Agriculture</a>
                                    </li>
                                    <li><a href="<?= base_url() ?>/gps_car_tracking">GPS CAR TRACKING</a></li>
                                    <li><a href="<?= base_url() ?>/fuel_monitoring">FUEL MONITORING</a></li>
                                    <li><a href="<?= base_url() ?>/speed_governors">SPEED GOVENORS</a></li>
                                    <li><a href="<?= base_url() ?>/alarm-systems">ALARM SYSTEMS</a></li>                                    
                                    <li><a href="<?= base_url() ?>/satellite-images">SATELLITE IMAGES</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>/stem_club">STEM CLUB</a></li>                            
                            <li><a href="#">contact us</a></li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white top-nav d-lg-none fixed-top">
	<div class="container">
		<a class="navbar-brand mobileHeaderLogo" href="/">
			<img src="<?=base_url() ?>/assets/images/logo.png" alt="logo" />
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#longitudenavbarResponsive" aria-controls="longitudenavbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars color-primary" style="font-size:22px;"></span>
		</button>
		<div class="collapse navbar-collapse" id="longitudenavbarResponsive">
			<!-- mobile menu links here by javascript -->
		</div>
	</div>
</nav>