<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		freedomrule_post_thumbnail();
	?>
    <div>
        <div class="pic">
            <img src="https://via.placeholder.com/184x120" />
        </div>
        <div class="pic" style="width: 60%;">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h3><a href="%s" rel="bookmark" style="text-decoration: none; color: #000000;">', esc_url( get_permalink() ) ), '</a></h3>' );
			endif;
		?>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'freedomrule' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'freedomrule' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'freedomrule' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

		<?php freedomrule_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'freedomrule' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
    </div>
</article><!-- #post-## -->
