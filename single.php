<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="border-top">
	<div class="two"></div>
	<div class="three">
		<div class="inner-three">
			<h1>News</h1>
		</div>
	</div>
</div>
<div class="cont">
	<section class="page">
		<div class="left-page">
		</div>
		<div class="right-page single">
			<?php $language = pll_current_language();
	            if($language == "fr"): ?>
	                <a href="http://bhfconsulting.ch/category/news/" class="chev-news"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	            <?php else : ?>
	             	<a href="http://bhfconsulting.ch/en/category/news-en/" class="chev-news"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	            <?php endif; ?>
			<h2><?php the_title(); ?></h2>
			<h3><?php the_field("date"); ?></h3>
			<div class="content-single">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>