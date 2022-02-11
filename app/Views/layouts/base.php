<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.3.4/css/jquery.mmenu.all.min.css'>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <title><?= $title ?> | LongitudeTechnologies</title>
    <?= $this->rendersection('stylesheet') ?>
</head>

<body>
    <?= $this->include('layouts/includes/header') ?>

    <?= $this->rendersection('content') ?>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.3.4/js/jquery.mmenu.min.all.min.js'></script>

    <script>
            $(document).ready(function(){
                $("#desktop-navigation-menu")
                .clone()
                .attr({'class':'d-lg-none','id':'mobile-menu'})
                .insertAfter("nav#desktop-navigation-menu");                
            });
        </script>
        
        <script>
			$(function() {
				$('nav#mobile-menu').mmenu({
					extensions	: [ 'fx-menu-slide', 'shadow-page', 'shadow-panels', 'listview-large', 'pagedim-white' ],
					iconPanels	: true,
					counters	: true,
					keyboardNavigation : {
						enable	: true,
						enhance	: true
					},
					navbar : {
						title : 'Longitude Technologies'
					},
					navbars	: [
                            {
							position	: 'top',
							content		: [ 'breadcrumbs', 'close' ]
						}, 
					]
				});
			});
		</script>


    <?= $this->rendersection('javascript') ?>
</body>

</html>