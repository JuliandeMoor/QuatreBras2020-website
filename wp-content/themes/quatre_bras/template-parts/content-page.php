<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quatre_Bras
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'quatre_bras'),
				'after'  => '</div>',
			)
		);

	

		



	
		

		if (have_rows('flex_content')) : /* field name van flexibel content groep */

			while (have_rows('flex_content')) : the_row();

				$dir = get_template_directory() . '/template-parts/blocks'; // variabel van map met modules
				$files = scandir($dir); // variabel van alle bestanden in map met php functie

				foreach ($files as $file) :

					$f = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file); // verwijder onleesbare tekens in bestandsnaam met Regular Expression. Maak variabel van deze aangepaste bestandsnaam.

					// plaats bestandsnamen als naam van rij
					if (get_row_layout() === $f)

						get_template_part('template-parts/blocks/' . $f);


				endforeach;

			endwhile;
		endif;

		
	
		
		
		?>

	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<!-- <?php
			edit_post_link(
				sprintf(
					wp_kses(
						__('Edit <span class="screen-reader-text">%s</span>', 'quatre_bras'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?> -->
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->