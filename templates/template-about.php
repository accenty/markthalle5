<?php /* Template Name: Template About */ get_header(); ?>

	<main id="main" class="main">
    <div class="content-wrap">
      <div class="about-wrapper">
        <h1><?php the_title(); ?></h1>

        <?php if(get_field('about--quote')): ?>
        <h2 class="quote">
          <?php the_field('about--quote') ?>
        </h2>
        <?php endif; ?>

        <?php if(get_field('about--contents')): ?>
        <div class="column-wrap">
          <?php the_field('about--contents'); ?>
        </div><!-- column-wrap -->
        <?php endif; ?>

        <div class="featured-container">
          <?php if(get_field('about--img')): ?>
          <figure>
            <img src="<?php the_field('about--img'); ?>" alt="Featured image">
          </figure>
          <?php endif; ?>

          <?php if(get_field('about--description')): ?>
          <div class="feature-description">
            <?php the_field('about--description'); ?>
          </div><!-- feature-description -->
          <?php endif; ?>

          <?php if(get_field('about--meta')): ?>
          <div class="feature-meta">
            <?php the_field('about--meta'); ?>
            <!-- <em>Folgen Sie uns auf</em>
            <strong><a href="#">Facebook</a></strong>

            <em>Bei Fragen</em>
            <strong><a href="mailto:info@markthalle-5.de">info@markthalle-5.de</a></strong> -->
          </div><!-- feature-meta -->
          <?php endif; ?>
        </div><!-- featured-container -->

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php comments_template( '', true ); // Remove if you don't want comments ?>
          <?php edit_post_link(); ?>
        <?php endwhile; ?>

      <?php else: ?>
        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
      <?php endif; ?>
      </div><!-- about-wrapper -->
    </div><!-- content-wrap -->
	</main><!-- main -->

<?php get_footer(); ?>
