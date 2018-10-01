    <div class="col-sm-2 menu">
        <!-- <div class="menu"> -->
        <div class="autorize text-center">
            AUTORIZE
        </div>
        <div class="menu-points">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <ul>
                    <?php
                    // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav-menu',
                        'theme_location' => 'primary',
                    ) );
                    ?>
                </ul><!-- .main-navigation -->
            <?php endif; ?>
        </div>
        <!-- </div> -->
    </div>