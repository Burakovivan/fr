<?php
get_header(); ?>
                <div class="row ">
                    <?php if ( have_posts() ) : ?>

                        <?php if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                        <?php endif; ?>
    <div class="col-sm-12 adversting">
        <div class="main-pic">
            <img src="https://via.placeholder.com/588x333" class="img" />
        </div>
        <div class="little-pic">
            <div class="little-pic-out">
                <div class="caption">
                    39 STATTES HAVE A BUDGET SUPRLUSES
                </div>
                <div class="time">
                    <p>Sep 15, 2016</p>
                    <p>By Tom Nich</p>
                </div>
                <div class="read">
                    <a style="color: white;">READ ></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
    <div>
        LAST INFORMATION
    </div>
                        <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );

                            // End the loop.
                        endwhile;

                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'freedomrule' ),
                            'next_text'          => __( 'Next page', 'freedomrule' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'freedomrule' ) . ' </span>',
                        ) );

                    // If no content, include the "No posts found" template.
                    else :
                        get_template_part( 'content', 'none' );

                    endif;
                    ?>
                </div>
           <?php get_footer();?>