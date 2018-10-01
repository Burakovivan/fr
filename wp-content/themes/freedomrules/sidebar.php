<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
    <div class="col-md-2 menu visible-md visible-lg">
        <!-- <div class="menu"> -->
        <div class="autorize text-center">
            AUTHORIZE
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
    </div>
    <div class="col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-0">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">
                        <a href="/news">
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                NEWS
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">

                        <a href="/video">
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                VIDEOS
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">
                        <a href="/photos">
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                PHOTOS
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">
                        <a href="/blog-post">
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                BLOG
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">
                        <a href="/blog-post"> 
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                ARTICLES
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="place-for-img">
                        <a href="/blog-post"> 
                            <div>
                                <img src="/wp-content/themes/freedomrules/images/crash_tv.gif" class="img" />
                            </div>
                            <div class="text">
                                RULES
                            </div>
                        </a>
                    </div>
                </div>
            </div>

<?php endif; ?>
