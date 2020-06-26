<div class="hero-wrapper">

	<div class="hero-container">
		<section class="hero-titel">
			<h1><?php the_sub_field('titel'); ?></h1>
		</section>

		<section class="hero-ondertitel">
			<h4><?php the_sub_field('ondertitel'); /* name van subveld in subgroep */ ?></h4>
		</section>
	</div>
	<?php

	$image = get_sub_field('achtergrond'); /* nog meer subvelden in deze subgroep */
	if (!empty($image)) { ?>
		
		<section class="hero-achtergrond">
			<div class=overlay></div>
			
			<section class="bg-img" style="background-image: url(<?php echo $image['url']; ?>)"></section>
		</section>
	<?php } ?>

</div>