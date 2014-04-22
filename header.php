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
    <body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage" style="background-image:url(images/DEMO.jpg);">
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

			<!-- Standard Wordpress Header -->
			<header id="page-header">
				<h1 id="page-logo">
					<span>
						<?php bloginfo('name') ?>
					</span>
				</h1>
				<?php wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container'      => 'nav',
					'container_id'   => 'primary-nav'
				)) ?>
			</header>
