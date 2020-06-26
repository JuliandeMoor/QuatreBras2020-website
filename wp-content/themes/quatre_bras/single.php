<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Quatre_Bras
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php

	get_template_part('template-parts/posts-hero');


	?>

	
	<div class="info-block-wrapper background-white text-color normal-height">
		<div class="info-block-container text full-width">
			<div class="content-wrapper">
				<section class="kop">
					<h2><?php the_field('event_date') ." ". the_title()?></h2>
				</section>

				<section class="paragraaf">
					<p><?php the_content() /* name van subveld in subgroep */ ?></p>
				</section>

				<section class="cta-button">
					<a href="<?php the_sub_field('link') ?>"><?php the_sub_field('cta-button'); /* name van subveld in subgroep */ ?></a>

				</section>
			</div>
		</div>
	</div>


	<div class="info-block-wrapper background-black big-height">

		<div class="info-block-container float-right">

			<?php
			$image = get_field('event_hero_bg'); /* nog meer subvelden in deze subgroep */
			?>
			<section class="info-block-foto" style="background-image: url(<?php echo $image; ?>)"></section>
		</div>

		<div class="info-block-container text float-right">
			<div class="content-wrapper">
				<section class="kop">
					<h2><?php the_title() ?></h2>
				</section>

				<section class="paragraaf">
					<p><?php the_sub_field('paragraaf'); /* name van subveld in subgroep */ ?></p>
				</section>

				<section class="cta-button">
					<a href="<?php the_sub_field('link') ?>"><?php the_sub_field('cta-button'); /* name van subveld in subgroep */ ?></a>

				</section>
			</div>
		</div>





	</div>





</main><!-- #main -->

<?php
get_footer();
