<?php
/*
Template Name: Acceuil
*/
?>
<?php get_header(); ?>
<div class="cont">
	<!--<section class="intro">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<article>
						<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg">
					</article>
				</div>
				<div class="swiper-slide">
					<article>
						<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg">
					</article>
				</div>
				<div class="swiper-slide">
					<article>
						<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg">
					</article>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>-->

	<section class="intro" <?php live_edit('banners'); ?>>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php while ( have_rows('banners') ) : the_row(); ?>
				<div class="swiper-slide">
					<div class="twoc"></div>
					<div class="onec">
						<div class="inner-three">
							<h1><?php the_sub_field("texte"); ?></h1>
						</div>
					</div>
					<div class="twoc">
						<div class="inner-three">
							<h1><?php the_sub_field("texte_2"); ?></h1>
						</div>
					</div>
					<div class="onec">
						<div class="inner-three special">
							<h1><?php the_sub_field("texte_3"); ?></h1>
						</div>
					</div>
					<div class="twoc"></div>
				</div>
			<?php endwhile; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section>

	<section class="message" <?php live_edit('intro'); ?>>
		<article>
			<h1>
				<?php the_field("intro"); ?>
 			</h1>
		</article>
	</section>

	<section class="home">
		<article class="prestations">
			<div class="title">
				<h2><?php the_field("prestations"); ?></h2>
			</div>
			<div class="content-home" <?php live_edit('prestations, gauche, droite'); ?>>
				<?php the_field("gauche"); ?>
				<?php the_field("droite"); ?>
			</div>
			<div class="more">
				<?php $language = pll_current_language();
	            if($language == "fr"): ?>
	                <a href="http://bhfconsulting.ch/prestations/">Voir les prestations</a>
	            <?php else : ?>
	             	<a href="http://bhfconsulting.ch/en/our-activities/">See all services</a>
	            <?php endif; ?>
			</div>
		</article>
		<article class="news">
			<div class="title">
				<h2><?php the_field("news"); ?></h2>
			</div>
			<div class="content-news" <?php live_edit('news'); ?>>
				<?php query_posts( 'cat=7&showposts=2' );
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div>
					<a href="<?php the_permalink(); ?>">
						<p>
							<?php the_title(); ?>
						</p>
						<span>
							<?php the_field("date"); ?>
						</span>
					</a>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="more">
				<?php $language = pll_current_language();
	            if($language == "fr"): ?>
	                <a href="http://bhfconsulting.ch/category/news/">Toutes les news</a>
	            <?php else : ?>
	             	<a href="http://bhfconsulting.ch/en/category/news-en/">See all news</a>
	            <?php endif; ?>
			</div>
		</aritcle>
	</section>
</div>

	    			
<?php get_footer(); ?>