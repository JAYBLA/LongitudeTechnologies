<header class="header_section sticky_header d-none d-lg-block">
    <div class="header_top" id="site-top-bar">
        <div class="container-fluid mr-5 pr-4">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-6">
                    <ul class="header_items_list ul_li_right">
                        <li><i class="fa fa-facebook-square" style="font-size:22px;"></i></li>
                        <li><i class="fa fa-instagram" style="font-size:22px;"></i></li>
                        <li><i class="fa fa-linkedin-square" style="font-size:22px;"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-items-left">
                    <div class="brand_logo">
                        <a href="/">
                            <img src="<?=base_url() ?>/assets/images/logo.png" alt="logo_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-9">
                    <nav class="main_menu ml-5">
                        <ul class="ul_li_center" id="toMobileMenu">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>                         
                            <li class="has_child">
                                <a href="#">products and Services</a>
                                <ul class="submenu">
                                    <li><a href="#">Service V.1</a></li>
                                    <li><a href="#">Service V.2</a></li>
                                    <li><a href="#">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="has_child">
                                <a href="#">support and resources</a>
                                <ul class="submenu">
                                    <li><a href="#">Pricing Plans</a></li>
                                    <li><a href="#">Creative Team</a></li>
                                    <li><a href="#">F.A.Q.</a></li>
                                </ul>
                            </li>
							<li><a href="#">promotions</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-site-primary top-nav d-lg-none">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="<?=base_url() ?>/assets/images/logo.png" alt="logo" />
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#longitudenavbarResponsive" aria-controls="longitudenavbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="longitudenavbarResponsive">
			<!-- mobile menu links here by javascript -->
		</div>
	</div>
</nav>