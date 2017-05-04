<?php get_header(); ?>

	<main role="main">
    <div class="content-wrap">

      <h1>404.</h1>
      <h2>Die Seite, die Sie aufrufen möchten, existiert nicht.</h2>

      <p>Gründe dafür könnten sein, dass Sie eine falsche oder veraltete URL aufgerufen haben - bitte überprüfen Sie diese noch einmal.</p>
      <p>Oder aber wir haben die betreffende Seite archiviert, verschoben oder umbenannt.</p>
      <p>Vielleicht können Sie den von Ihnen gewünschten Inhalt über unsere Startseite finden.</p>

			<a href="<?php echo home_url(); ?>" class="back-home"><?php _e( 'Return home?', 'html5blank' ); ?></a>

    </div><!-- content-wrap -->
	</main>

<?php get_footer(); ?>
