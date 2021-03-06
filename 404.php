<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
get_header(); ?>

<main class="home-right-block">
	<div class="hero-unit">
		
		<div class="page-404">
			<h4 class="uk-text-center"><?php _e( '404 something went wrong..', 'jindaBlog' ); ?></h4>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" class="none-image" alt="Nothing found" />
			<div class="uk-clearfix"></div>

			<p class="uk-text-center"><?php _e( 'but no need to worry, will take you home', 'jindaBlog' ); ?></p>
			<p class="uk-text-center"><a href="<?php echo home_url() ?>" alt="back to home" class="uk-button uk-button-success"><?php _e( 'Go to Home', 'jindaBlog' ); ?></a></p>
			
		</div>

	</div>
</main>

<?php get_footer(); ?>