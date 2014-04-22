<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>

    <noscript>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/img.css" />
		</noscript>

    </head>
    <body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage" style="background-image:url(images/villa_gevaco_2.JPG);">
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
			<header role="banner" class="main-header">
				<div class="layout">
					<nav role="navigation">
						<ul>
							<li><a href="<?php home_url(); ?>/over-ons"><span>Over ons</span><span class="sub">Onze visie</span></a></li>
							<li><a href="<?php home_url(); ?>/realisaties"><span>Realisaties</span><span class="sub">Afbeeldingen</span></a></li>
							<li class="logo"><a href="<?php home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/gevaco_logo.png" alt="Logo Gevaco - bouwbedrijf"></a></li>
							<li><a href="<?php home_url(); ?>/vacature"><span>Nieuws</span><span class="sub">Vacatures</span></a></li>
							<li><a href="<?php home_url(); ?>/contact"><span>Bedrijf</span><span class="sub">Info - contact</span></a></li>
						</ul>
					</nav>
				</div>
			</header>