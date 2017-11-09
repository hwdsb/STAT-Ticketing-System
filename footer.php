<div id="footer" class="container">
	<div class="row">
		<div class="ninecol">
			<div id="footer-wrap">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_id' => 'footer-nav-menu', 'depth' => 1, 'fallback_cb' => false ) ); ?>
				<ul>
					<li>Tutoring icon designed by <a href="http://www.thenounproject.com/takaoumehara">Takao Umehara</a> from the <a href="http://www.thenounproject.com">Noun Project</a>  Powered by <a target="_blank" href="http://wordpress.org/" title="Powered by WordPress">WordPress</a></li>
					<li class="alignright"><?php printf( __( '%1$d queries. %2$s seconds.', APP_TD ), get_num_queries(), timer_stop() ); ?></li>
				</ul>
			</div>
		</div><!--.col-->
		<div class="threecol last">
		</div><!--.col-->
	</div><!--.row-->
</div><!--#footer .container-->