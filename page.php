<?php
/*
Template Name: Home
*/
?>

<!-- Template voor de index pagina. -->
<!-- Dit is dus de index pagina!!!!! -->


<?php get_header(); ?>
<!-- <div id="page-content"> -->
	<?php //get_template_part('loop', 'page'); ?>
<!-- </div> -->

<div class="container layout single-section">
	<section class="content">
		<div class="content-wrapper">
			<div class="side-img" itemprop="primaryImageOfPage" itemscope itemtype="http://schema.org/ImageObject">
				<?php get_sidebar(); ?>
			</div>
			<article itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement">
				<header>
					<hgroup>
						<h1><?php the_title(); ?></h1>
					</hgroup>
				</header>
				<?php get_template_part('loop', 'page'); ?>
				<footer>
					<div itemprop="author" itemscope itemtype="http://schema.org/Person" class="person"><span itemprop="jobTitle" content="ingenieur">ing.</span> <span class="name"><span itemprop="givenName">Philip</span> <span itemprop="familyName">Geypen</span></span>	<span class="function" itemprop="jobTitle">Zaakvoerder</span></div>
				</footer>
			</article>
		</div>
	</section>
</div>
<?php get_footer(); ?>
