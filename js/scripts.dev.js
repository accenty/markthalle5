//@prepros-prepend lib/jquery-3.2.1.min.js
//@prepros-prepend lib/jquery-ui.min.js

(function ($, root, undefined) {

	$(function () {

		$(window).scroll(function(){
			var $windowScroll = $(window).scrollTop();
			var $headerHeight = $('.header').innerHeight();

			$('.header').toggleClass('sticky',$windowScroll > $headerHeight);

			titleParallax();
		});

    $('.quantity input[type=number]').spinner();

		backTop();
		hamburger();
		fadeInProducts();
		productDetailImageSwitcher();
		productArchiveToggle();
	});

	function hamburger() {
		$('.hamburger').click(function(){
			$(this).toggleClass('active');
			$('html').toggleClass('no-scroll');
			$('.page-wrap').toggleClass('show-nav');
			$('.off-canvas').toggleClass('show-nav');
			$('.header').toggleClass('show-nav');
		});
	}

	function productArchiveToggle() {
		$('.toggle-cat-list').click(function(){
			$(this).toggleClass('active');
			$('.cat-list ul').slideToggle('fast');
		});
	}

	function titleParallax() {
		var $windowScroll = $(window).scrollTop();
		var parallaxRatio = 5;

		$('.title-container .product-image').css('margin-top', $windowScroll / parallaxRatio);
	}

	function backTop() {
		$(window).scroll(function(){
			var $windowScroll = $(window).scrollTop();
			$('.back-to-top').toggleClass('visible',$windowScroll > 600);
		});

		$('.back-to-top').click(function(e){
			e.preventDefault();
			$('html,body').animate({scrollTop: 0},700);
		});
	}

	function fadeInProducts() {
		$('ul.products .product--small').each(function(n){
			var $this = $(this);
			setTimeout(function(){
				$this.addClass('fade-in');
			},75*n);
		});
	}

	function productDetailImageSwitcher() {
		$('.woocommerce-product-gallery__image a').click(function(e){
			e.preventDefault();
		});

		$('.woocommerce-product-gallery__image a img').click(function() {
			var $baseImageSrc = $('.woocommerce-product-gallery__image:first-of-type a img').attr('src');
			var $href = $(this).attr('src');

			$('.woocommerce-product-gallery__image:first-of-type a img').attr('src',$href);
			$(this).attr('src',$baseImageSrc);
		});
	}

})(jQuery, this);
