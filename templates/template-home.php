<?php /* Template Name: Template Home */ get_header(); ?>

  <main id="main" class="main">
    <?php if(get_field('title-container--content')): ?>
    <div class="title-container" style="background-image: url('<?php the_field('title-container--background'); ?>')">
      <div class="content-wrap">
        <div class="inner-wrap">
          <div>
            <h1><?php the_field('title-container--heading'); ?></h1>
            <?php the_field('title-container--content'); ?>
          </div>

          <?php if(get_field('title-container--product')): ?>
          <img src="<?php the_field('title-container--product');?>" class="product-image" alt="Product image">
          <?php endif; ?>
        </div><!-- inner-wrap -->
      </div><!-- content-wrap -->
      <a href="<?php the_field('title-container--cta-url'); ?>" class="shop-cta">
        <span class="content-wrap">
          <span><?php the_field('title-container--cta-text'); ?></span>
        </span><!-- content-wrap -->
      </a>
    </div><!-- title-container -->
    <?php endif; ?>

    <?php if( have_rows('quickstart-container') ): ?>
      <div class="quickstart-container">
        <div class="content-wrap">
    	<?php while( have_rows('quickstart-container') ): the_row();
    		// vars
    		$image = get_sub_field('image');
    		$content = get_sub_field('content');
    		$link = get_sub_field('link');
    	?>
        <?php if ($link): ?>
          <a href="<?php echo $link; ?>" class="column">
            <?php if($image): ?>
            <figure>
              <img src="<?php echo $image; ?>" alt="Placeholder">
            </figure>
            <?php endif; ?>
            <?php if($content): ?>
            <?php echo $content; ?>
            <?php endif; ?>
          </a><!-- column -->
        <?php endif; ?>
    	<?php endwhile; ?>
        </div><!-- content-wrap -->
      </div><!-- quickstart-container -->
    <?php endif; ?>

    <div class="assortment-container">
      <div class="content-wrap">
        <?php the_field('assortment-container--content'); ?>

        <?php
          if(have_rows('assortment-container--columns')):
        ?>
        <div class="column-wrap">
          <?php
            while(have_rows('assortment-container--columns')): the_row();
            // vars
            $image = get_sub_field('image');
            $content = get_sub_field('content');
            $link = get_sub_field('link');
            $colour = get_sub_field('colour');
          ?>

          <?php if($link): ?>
          <a href="<?php echo $link; ?>" class="column" style="background-color: <?php echo $colour; ?>">
            <figure>
              <img src="<?php echo $image; ?>" alt="">
            </figure>
            <h4><?php echo $content; ?></h4>
          </a><!-- column -->
          <?php endif; ?>

          <?php endwhile; ?>
        </div><!-- column-wrap -->
        <?php endif; ?>

      </div><!-- content-wrap -->
    </div><!-- assortment-container -->

    <div class="featured-products-container">
      <div class="content-wrap">
        <div class="column-wrap">
          <?php
            $meta_query   = WC()->query->get_meta_query();
            $meta_query[] = array(
                'key'   => '_featured',
                'value' => 'yes'
            );
            $args = array(
                'post_type'   =>  'product',
                'stock'       =>  1,
                'showposts'   =>  6,
                'orderby'     =>  'date',
                'order'       =>  'DESC',
                'meta_query'  =>  $meta_query
            );

          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <a class="item" href="<?php the_permalink(); ?>">
                <?php if(get_field('product-image')): ?>
                  <figure>
                    <img src="<?php the_field('product-image'); ?>" alt="<?php the_title(); ?>">
                  </figure>
                <?php endif; ?>

                <h4><?php the_title(); ?></h4>
                <h5><?php the_field('product-type'); ?></h5>
                <em><?php the_field('product-additional-info') ?></em>
                <?php echo woocommerce_price($product->get_price_including_tax()); ?>
                <button>
                  Kaufen
                </button>
              </a><!-- item -->

          <?php
              endwhile;
              wp_reset_query();
          ?>
        </div><!-- column-wrap -->
      </div><!-- content-wrap -->
    </div><!-- featured-products-container -->
  </main><!-- main -->

	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<?php comments_template( '', true ); // Remove if you don't want comments ?>
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

<?php get_footer(); ?>
