<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quatre_Bras
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php

	// voorbeeld loop

	// $pages = get_pages();
	// foreach ($pages as $page) {
	// 	echo ($page->post_title);
	// }
	// Reset Post Data
	wp_reset_postdata(); // essentieel om aan te geven dat de loop eindigt. Eventueel kunnen meerdere (afwijkende) loops onder elkaar worden geplaatst zolang ze afgesloten worden.

	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.


	?>





</main><!-- #main -->

<?php

get_footer();
