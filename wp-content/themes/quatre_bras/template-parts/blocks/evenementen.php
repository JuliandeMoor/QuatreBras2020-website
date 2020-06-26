<div class="section-wrapper">
    
        <section>
            <h2><?php the_sub_field('evenementen_titel'); ?></h2>
        </section>


        <div class="thumbs-container">
            <?php
            $args1 = array( // voor onze organisatie maken we een variabele van de argumenten
                'posts_per_page' => '1', // haal maximaal 12 posts op
                'post_type' => 'post', // alleen posts uit de standaard type genaamd 'post'
                // 'offset' => '1'
                'order' => 'ASC'
            );

            // init WP_Query
            $query1 = new WP_Query($args1); // een nieuwe loop met de argumenten in een variabele

            // The Loop
            if ($query1->have_posts()) :
                while ($query1->have_posts()) : $query1->the_post();



            ?>
                    <section class="thumbs big-thumbs">

                        <?php
                        $img = get_field('event_hero_bg'); /* nog meer subvelden in deze subgroep */

                        ?>
                        <section class="bg-img" style="background-image: url(<?php echo $img; ?>)"></section>
                        <div class="content-wrapper">

                            <div class="content-container">
                                <section class="event-date">
                                    <h3><?php the_field('event_date'); ?></h3>
                                </section>
                            </div>
                            <div class="content-container content-container-info">
                                <section class="thumb-title">
                                    <p><?php the_title() ?></p>
                                </section>
                                <section class="thumb-content">
                                    <p>
                                        aan achter de ba Walter en Melanie de Moor staan achter de ba Walter en Melanie de Moor staan achter de ba
                                    </p>
                                </section>
                                <section class="cta-button">
                                    <a href="<?php echo get_permalink() ?>"><?php the_field('evenementen_cta'); /* name van subveld in subgroep */ ?></a>

                                </section>




                            </div>
                        </div>
                    </section>
            <?php



                endwhile;
            endif;
            // Reset Post Data
            wp_reset_postdata(); // essentieel om aan te geven dat de loop eindigt. Eventueel kunnen meerdere (afwijkende) loops onder elkaar worden geplaatst zolang ze afgesloten worden.

            ?>
        </div>
        <div class="thumbs-container">
            <ul>
                <?php
                $args2 = array( // voor onze organisatie maken we een variabele van de argumenten
                    'posts_per_page' => '3', // haal maximaal 12 posts op
                    'post_type' => 'post', // alleen posts uit de standaard type genaamd 'post'
                    'offset' => '1',
                    'order' => 'ASC'
                );

                // init WP_Query
                $query2 = new WP_Query($args2); // een nieuwe loop met de argumenten in een variabele

                // The Loop
                if ($query2->have_posts()) :
                    while ($query2->have_posts()) : $query2->the_post();
                ?>
                        <li>
                            <section class="thumbs small-thumbs" href="">
                            <div class="content-wrapper">
                                    <div class="content-container">

                                        <section class="event-date">
                                            <h3><?php the_field('event_date'); ?></h3>
                                        </section>
                                    </div>
                                    <div class="content-container content-container-info">

                                        <section class="thumb-title">
                                            <p><?php the_title() ?></p>
                                        </section>
                                        <section class="thumb-content">
                                            <p>
                                                aan achter de ba Walter en Melanie de Moor staan achter de ba Walter en Melanie de Moor staan achter de ba
                                            </p>
                                        </section>
                                        <section class="cta-button">
                                            <a href="<?php echo get_permalink() ?>"><?php the_field('evenementen_cta'); /* name van subveld in subgroep */ ?></a>

                                        </section>
                                    </div>
                </div>
                            </section>
                        </li>

                <?php
                    endwhile;
                endif;
                // Reset Post Data
                wp_reset_postdata(); // essentieel om aan te geven dat de loop eindigt. Eventueel kunnen meerdere (afwijkende) loops onder elkaar worden geplaatst zolang ze afgesloten worden.
                ?>
            </ul>
        </div>
    
</div>