    <footer id="footer" class="footer">
      <div class="content-wrap">
        <div class="map-container">
          <?php echo do_shortcode('[ank_google_map]'); ?>
        </div><!-- map-container -->

        <?php if(get_field('event-title',2)): ?>
        <div class="event-container">
          <h3><?php the_field('event-title',2); ?></h3>

          <?php if(get_field('event-date',2)): ?>
          <span class="date">
            <strong><?php the_field('event-date',2); ?></strong>
            <?php the_field('event-time',2); ?>
          </span>
          <?php endif; ?>

          <?php the_field('event-description',2); ?>

          <?php if(get_field('cta-url',2)): ?>
          <a href="mailto:<?php the_field('cta-url',2); ?>" class="cta">
            <?php the_field('cta-text',2); ?>
          </a>
          <?php endif; ?>
        </div><!-- event-container -->
        <?php endif; ?>
      </div><!-- content-wrap -->
      <div class="content-wrap">
        <div class="footer-meta column-wrap">
          <?php if(get_field('meta-opening-times',2)): ?>
          <div class="column">
            <?php the_field('meta-opening-times',2); ?>
          </div>
          <?php endif; ?>
          <?php if(get_field('meta-phone-number',2)): ?>
          <div class="column">
            <?php the_field('meta-phone-number',2); ?>
          </div>
          <?php endif; ?>
          <?php if(get_field('meta-e-mail',2)): ?>
          <div class="column">
            <?php the_field('meta-e-mail',2); ?>
          </div>
          <?php endif; ?>
          <?php if(get_field('meta-location',2)): ?>
          <div class="column">
            <?php the_field('meta-location',2); ?>
          </div>
          <?php endif; ?>
        </div><!-- footer-meta -->
      </div><!-- content-wrap -->

      <div class="bottom-bar">
        <div class="content-wrap">
          <nav class="footer-nav column-wrap">
            <?php wp_nav_menu(array('theme_location' => 'footer-navigation')); ?>
            <nav class="social column">
              <?php if(get_field('instagram-url',2)): ?>
                <a href="<?php the_field('instagram-url',2); ?>" class="instagram"><span>Instagram</span></a>
              <?php endif; ?>
              <?php if(get_field('facebook-url',2)): ?>
                <a href="<?php the_field('facebook-url',2); ?>" class="facebook"><span>Facebook</span></a>
              <?php endif; ?>
            </nav><!-- social -->
          </nav>
          <div class="copyright">
            <p>
              &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. Alle Rechte vorbehalten.
            </p>
          </div><!-- copyright -->
        </div><!-- content-wrap -->
      </div><!-- bottom-bar -->
    </footer><!-- footer -->

		<?php wp_footer(); ?>
    <?php // edit_post_link(); ?>

    <a href="#top" class="back-to-top"><span>Zurück nach oben.</span></a>
  </div>
	</body>
</html>
