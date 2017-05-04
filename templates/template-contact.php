<?php
  /*
    Template Name: Contact Page Template
  */

  get_header();
?>
	<main role="main" class="regular-page">
    <div class="content-wrap">
      <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <!-- article -->
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

            <?php comments_template( '', true ); // Remove if you don't want comments ?>

            <br class="clear">

            <?php edit_post_link(); ?>

          </article>
          <!-- /article -->

        <?php endwhile; ?>

      <?php else: ?>

        <!-- article -->
        <article>

          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

      <?php endif; ?>

    </section>
    <!-- /section -->
    </div>
    <div class="contact-form">
      <div class="content-wrap">
        <?php
          // selectively load Contact form 7 JavaScript and CSS files
          function rapidx_deregister_javascript() {
              if ( is_page( array( 'contribute', 'contact-us' ) ) ) {
                  if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
                      wpcf7_enqueue_scripts();
                  }
                  if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
                      wpcf7_enqueue_styles();
                  }
              }
          }
          add_action( 'wp_enqueue_scripts', 'rapidx_deregister_javascript', 100 );
        ?>
        <?php echo do_shortcode('[contact-form-7 id="187" title="Kontaktformular 1"]'); ?>
      </div>
    </div>
		<!-- section -->
	</main>

<?php get_footer(); ?>
