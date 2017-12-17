<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php wp_title(''); ?></title>
<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); 
wp_enqueue_script('jquery');
?>
<script>
	jQuery(document).ready(function( $ ) {
		
		$(".top").click(function(){

         $(".down").slideUp();

         if($(this).parent().find(".down").is(":visible")) {
             $(this).parent().find(".down").slideUp();
         }
         else {
             $(this).parent().find(".down").slideDown();
         }

         if ( $(this).parent().find(".chev").hasClass( "rote" ) ) {
             $(this).parent().find(".chev").removeClass("rote");
         }
         else {
             $(".top").parent().find(".chev").removeClass("rote");
             $(this).parent().find(".chev").addClass("rote");
         }
     })

	$('.onec .inner-three').addClass('expand');
	$('.twoc .inner-three').addClass('expando');

	let swiper = new Swiper('.swiper-container', {
		pagination: {
		    el: '.swiper-pagination',
		        clickable: 'true'
		    },
		    autoplay: {
			    delay: 5000,
			},
			  speed: 1700
		    });

		    swiper.on('slideChange', function () {
			  console.log('slide changed');
			  $('.onec .inner-three').removeClass('expand');
			  $('.twoc .inner-three').removeClass('expando');
			  
			  setTimeout(function () { 
				    $('.onec .inner-three').addClass('expand');
			  $('.twoc .inner-three').addClass('expando');
				}, 1200);
		});

	});
</script>
</head>
<body>

	<main>
		<header>
			<div id="menu-phone">
				<i id="icon" class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<div class="inner">
				<div class="flex-logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo-bhf.svg" alt="BHF">
					</a>
					<nav id="nav">
						<?php wp_nav_menu( array( 'theme_location' => 'pages', 'container' => false ) ); ?>
						<div class="switch-mobile">
							<ul><?php pll_the_languages();?></ul>
						</div>
					</nav>
				</div>
				<div class="switch">
					<ul><?php pll_the_languages();?></ul>
				</div>
			</div>
		</header>