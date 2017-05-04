(function ($, root, undefined) {

	$(function () {

		$(window).scroll(function(){
			var $windowScroll = $(window).scrollTop();
			var $headerHeight = $('.header').innerHeight();

			$('.header').toggleClass('sticky',$windowScroll > $headerHeight);

			titleParallax();
		});

		backTop();
		hamburger();
		fadeInProducts();
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

})(jQuery, this);
