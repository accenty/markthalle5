<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta name="theme-color" content="#222222">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="top">

  <div class="off-canvas">
    <div class="search-wrap" style="">
      <?php get_template_part('searchform'); ?>
    </div><!-- search-wrap -->

    <nav class="main-nav">
      <?php wp_nav_menu(array('theme_location' => 'header-navigation')); ?>
    </nav><!-- main-nav -->

		<div class="cart-nav">
			<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

		    $count = WC()->cart->cart_contents_count;
		    ?><a class="cart-contents cart-count" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">Warenkorb <?php
		    if ( $count > 0 ) {
		        ?>
		        <span class="cart-contents-count">(<?php echo esc_html( $count ); ?>)</span>
		        <?php
		    } else {
					echo '(0)';
				}
		        ?></a>

		<?php } ?>
		</div>
  </div><!-- off-canvas -->

	<header id="header" class="header">
		<div class="content-wrap">

			<div class="logo-wrap">
				<h1 class="logo">
					<a href="<?php echo home_url(); ?>">
						<span>Markthalle 5</span>
					</a>
				</h1>
			</div>

			<nav class="main-nav">
				<?php wp_nav_menu(array('theme_location' => 'header-navigation')); ?>
			</nav>


			<div class="header-meta">
				<div class="search-wrap">
					<?php get_template_part('searchform'); ?>
				</div>

				<div class="cart-nav">
					<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

				    $count = WC()->cart->cart_contents_count;
				    ?><a class="cart-contents cart-count" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">Warenkorb <?php
				    if ( $count > 0 ) {
				        ?>
				        <span class="cart-contents-count">(<?php echo esc_html( $count ); ?>)</span>
				        <?php
				    } else {
							echo '(0)';
						}
				        ?></a>

				<?php } ?>
				</div>
			</div>

			<i class="hamburger" title="Menü">
				<span></span>
			</i><!-- hamburger -->
		</div><!-- content-wrap -->
	</header><!-- header -->

	<div class="page-wrap">
