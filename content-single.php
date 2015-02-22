<?php
/**
 * @package pressedsqueezed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2 class="bio-name"><?php the_field('job_title'); ?></h2>
		<?php the_post_thumbnail(); ?>
		<div class="entry-meta">
			<?php //pressedsqueezed_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pressedsqueezed' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pressedsqueezed_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
