<nav id="site-navigation" class="main-navigation">

    <ul>
        
        <li>
            <a href="#">Reserveer</a>
        </li>
        <li>
            <a href="#">Eten & drinken</a>
        </li>
        <li>
            <a href="#">Clubs</a>
        </li>
        <li>
            <a href="#">Evenementen</a>
        </li>
        <li>
            <a href="#">Over ons</a>
        </li>
        
        <li class='float-left'>
            <div class="site-branding">
                <?php

                if (is_front_page() && is_home()) :
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class='site-title'> <img src="img/quatrebraslogo-white.png" alt="#"></a>
                <?php
                else :
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class='site-title'> <img src="img/quatrebraslogo-white.png" alt="#"></a>
                <?php
                endif;

                ?>
            </div><!-- .site-branding -->
        </li>
        
        
    </ul>
</nav><!-- #site-navigation -->