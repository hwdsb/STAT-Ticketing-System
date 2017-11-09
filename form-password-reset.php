<?php
/**
 * Template Name: Password Reset
 */
?>

<div id="main" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="ticket-manager" class="tabber">

			<?php get_template_part( 'templates/navigation', 'password-reset' ); ?>

			<div class="panel">

				<?php do_action( 'appthemes_notices' ); ?>

				<?php require APP_FRAMEWORK_DIR . '/templates/form-password-reset.php'; ?>

			</div>

		</div><!-- End #ticket-manager -->

	<?php endwhile; endif; ?>

</div><!-- End #main -->