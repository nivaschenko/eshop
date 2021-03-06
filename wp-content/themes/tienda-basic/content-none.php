<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @since 1.0.0
 */
?>
	<article class="no-results not-found">
   	   	<h1 class="entry-title page-header"><?php _e( 'Nothing found', 'tienda-basic' ); ?></h1>

	    <div class="entry-content description clearfix">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tienda-basic' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php _e( 'Sorry, but no posts matched your search terms. Please try again with some different keywords.', 'tienda-basic' ); ?></p>
				<?php //get_search_form(); ?>

			<?php else : ?>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tienda-basic' ); ?></p>
				<?php //get_search_form(); ?>

			<?php endif; ?>
        </div>
    </article><!-- #post-0. -->