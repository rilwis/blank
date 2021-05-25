<?php
get_header();

while ( have_posts() ) {
	the_post();

	get_template_part( 'content' );
}
the_posts_navigation();

get_footer();
