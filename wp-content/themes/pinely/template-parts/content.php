<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pinely
 */

?>
<?php if(is_singular()){?>
<article class="singlePart" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php
		echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => '' ) );
		if ( is_singular() ) :
			the_title( '<h1 >', '</h1>' );
		else :
			the_title( '<h2>', '</h2>' );
		endif;
?>
	

	

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pinely' ),
					array(
						'span' => array(
							'class' => array('text'),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php } else{?>
<article class="singlePart nots" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php
		echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => '' ) );
		if ( is_singular() ) :
			the_title( '<h1 >', '</h1>' );
		else :
			the_title( '<h2>', '</h2>' );
		endif;
?>
	

	

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pinely' ),
					array(
						'span' => array(
							'class' => array('text'),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		
		?>
		<a href="<?php echo get_permalink( $post->ID ); ?>">Read More</a>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php }?>